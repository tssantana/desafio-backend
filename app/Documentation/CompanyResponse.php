<?php

namespace App\Documentation;

/**
 * @OA\Schema(
 *      title="Company Response",
 *      description="Data of company",
 *      type="object",
 * )
 */
class CompanyResponse
{
    /**
     * @OA\Property(
     *      title="Identificador",
     *      description="Identificador do veículo",
     * )
     *
     * @var integer
     */
    public $id;

    /**
     * @OA\Property(
     *      title="Data da criação",
     *      description="Data/Hora da criação do veículo",
     *      format="datetime",
     * )
     *
     * @var string
     */
    public $created_at;

    /**
     * @OA\Property(
     *      title="Data da atualização",
     *      description="Data/Hora de atualização do veículo.",
     *      format="datetime",
     * )
     *
     * @var string
     */
     public $updated_at;
}
