<?php

namespace App\Documentation;

/**
 * @OA\Schema(
 *      title="Company Response",
 *      description="Dados da companhia.",
 *      type="object",
 * )
 */
class CompanyResponse
{
    /**
     * @OA\Property(
     *      title="Symbol",
     *      description="Símbolo da empresa na bolsa de valores (ticket).",
     * )
     *
     * @var string
     */
    public $symbol;

    /**
     * @OA\Property(
     *      title="Data da criação",
     *      description="Data/Hora da criação da companhia nesta base de dados.",
     *      format="datetime",
     * )
     *
     * @var string
     */
    public $created_at;

    /**
     * @OA\Property(
     *      title="Data da atualização",
     *      description="Data/Hora de atualização dos dados da companhia nesta base de dados.",
     *      format="datetime",
     * )
     *
     * @var string
     */
     public $updated_at;

     /**
     * @OA\Property(
     *      title="companyName",
     *      description="Nome da companhia na bolsa de valores.",
     * )
     *
     * @var string
     */
    public $companyName;

    /**
     * @OA\Property(
     *      title="description",
     *      description="Descrição da companhia na bolsa de valores.",
     * )
     *
     * @var string
     */
    public $description;
}
