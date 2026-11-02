<?php

class Persona
{
    private string $nombre;
    private string $fecha_nacimiento;
    private string $domicilio;
    private string $localidad;
    private EstadoCivil $estado;

    // Constructor privado sin parámetros
    private function __construct()
    {
        $this->nombre = "prueba";
        $this->fecha_nacimiento = "01/01/2000";
        $this->domicilio = "carrera 12";
        $this->localidad = "antequera";
        $this->estado = EstadoCivil::Soltero;
    }

    // Constructor estático
    public static function registrarPersona(
        string $nombre,
        string $fecha_nacimiento,
        string $domicilio,
        string $localidad,
        EstadoCivil $estado
    ): static {
        $p = new static();
        $p->setNombre($nombre);
        $p->setFechaNacimiento($fecha_nacimiento);
        $p->setDomicilio($domicilio);
        $p->setLocalidad($localidad);
        $p->setEstado($estado);
        return $p;
    }

    // nombre
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    // fecha_nacimiento
    public function getFechaNacimiento(): string
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento(string $fecha_nacimiento): void
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    // domicilio
    public function getDomicilio(): string
    {
        return $this->domicilio;
    }

    public function setDomicilio(string $domicilio): void
    {
        $this->domicilio = $domicilio;
    }

    // localidad
    public function getLocalidad(): string
    {
        return $this->localidad;
    }

    public function setLocalidad(string $localidad): void
    {
        $this->localidad = $localidad;
    }

    // estado
    public function getEstado(): EstadoCivil
    {
        return $this->estado;
    }

    public function setEstado(EstadoCivil $estado): void
    {
        $this->estado = $estado;
    }

    public function __toString(): string
    {
        return $this->nombre . " es una persona " . $this->estado->descripcion()
            . " nacida en " . $this->fecha_nacimiento
            . " y que vive en " . $this->localidad;
    }
}