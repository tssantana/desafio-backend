<?php

namespace App\Documentation;

/**
 * @OA\Schema(
 *      title="Cotation Response",
 *      description="Dados da cotação da companhia.",
 *      type="object",
 * )
 */
class CotationResponse
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
     *      description="Data/Hora da criação da cotação nesta base de dados.",
     *      format="datetime",
     * )
     *
     * @var string
     */
    public $created_at;

    /**
     * @OA\Property(
     *      title="Data da atualização",
     *      description="Data/Hora de atualização dos dados da cotação nesta base de dados.",
     *      format="datetime",
     * )
     *
     * @var string
     */
     public $updated_at;

     /**
     * @OA\Property(
     *      title="latestPrice",
     *      description="O valor mais recente da companhia.",
     * )
     *
     * @var float
     */
    public $latestPrice;

    /**
     * @OA\Property(
     *      title="change",
     *      description="A variação de preço entre o valor mais recente e o fechamento anterior.",
     * )
     *
     * @var float
     */
    public $change;

    /**
     * @OA\Property(
     *      title="description",
     *      description="O percentual da variação de preço entre o valor mais recente e o fechamento anterior.",
     * )
     *
     * @var float
     */
    public $changePercent;   
}
