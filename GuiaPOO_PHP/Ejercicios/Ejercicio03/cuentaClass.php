<?php
class Cuenta {
    public $numeroCuenta;
    public $nombreTitular;
    public $saldo;
    public $tipoCuenta;

    public function __construct($numeroCuenta, $nombreTitular, $saldo, $tipoCuenta) {
        $this->numeroCuenta = $numeroCuenta;
        $this->nombreTitular = $nombreTitular;
        $this->saldo = $saldo;
        $this->tipoCuenta = $tipoCuenta;
    }

    public function ingresarDinero($cantidad) {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
            return "Se ingresaron $cantidad a la cuenta.<br>";
        }
        return "El monto a ingresar debe ser positivo.<br>";
    }

    public function retirarDinero($cantidad) {
        if ($cantidad > 0 && $cantidad <= $this->saldo) {
            $this->saldo -= $cantidad;
            return "Se retiraron $cantidad de la cuenta.<br>";
        }
        return "Saldo insuficiente o monto inválido.<br>";
    }

    public function pagarFactura($monto) {
        return $this->retirarDinero($monto);
    }

    public function transferirSaldo($monto, &$otraCuenta) {
        if ($monto > 0 && $monto <= $this->saldo) {
            $this->saldo -= $monto;
            $otraCuenta->ingresarDinero($monto);
            return "Se transfirieron $monto a la cuenta {$otraCuenta->numeroCuenta}.<br>";
        }
        return "Transferencia fallida, saldo insuficiente o monto inválido.<br>";
    }

    public function obtenerSaldo() {
        return "Saldo actual: $this->saldo.<br>";
    }
}
?>