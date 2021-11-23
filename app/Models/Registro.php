<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $fechaCreacionFichero
 * @property $tipo_id_receptor
 * @property $num_id_receptor
 * @property $forma_de_pago
 * @property $codigo_banc_receptor
 * @property $oficina_cta_recepbbva
 * @property $Numero_cta_repbbva
 * @property $cta_recp_nachan
 * @property $Num_cuenta_nachan
 * @property $valor_ope_part_entera
 * @property $valor_ope_decimal
 * @property $fecha_proceso
 * @property $fecha_lim_pago
 * @property $fecha_cobro
 * @property $cod_ofc_pagadora
 * @property $hora_cobro
 * @property $nombre_receptor
 * @property $detalle_devol
 * @property $Concepto1
 * @property $Codigo_cajero
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
		'fechaCreacionFichero' => 'required',
		'tipo_id_receptor' => 'required',
		'num_id_receptor' => 'required',
		'forma_de_pago' => 'required',
		'codigo_banc_receptor' => 'required',
		'oficina_cta_recepbbva' => 'required',
		'Numero_cta_repbbva' => 'required',
		'cta_recp_nachan' => 'required',
		'Num_cuenta_nachan' => 'required',
		'valor_ope_part_entera' => 'required',
		'valor_ope_decimal' => 'required',
		'fecha_proceso' => 'required',
		'fecha_lim_pago' => 'required',
		'fecha_cobro' => 'required',
		'cod_ofc_pagadora' => 'required',
		'hora_cobro' => 'required',
		'nombre_receptor' => 'required',
		'detalle_devol' => 'required',
		'Concepto1' => 'required',
		'Codigo_cajero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fechaCreacionFichero','tipo_id_receptor','num_id_receptor','forma_de_pago','codigo_banc_receptor','oficina_cta_recepbbva','Numero_cta_repbbva','cta_recp_nachan','Num_cuenta_nachan','valor_ope_part_entera','valor_ope_decimal','fecha_proceso','fecha_lim_pago','fecha_cobro','cod_ofc_pagadora','hora_cobro','nombre_receptor','detalle_devol','Concepto1','Codigo_cajero'];



}
