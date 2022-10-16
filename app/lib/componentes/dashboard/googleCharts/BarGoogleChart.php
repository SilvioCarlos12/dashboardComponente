<?php

namespace Componente\Dashboard\GoogleCharts\BarGoogleChart;
use Adianti\Widget\Template\THtmlRenderer;
use BarChart;

class BarGoogleChart implements  BarChart
{

    private $altura;
    private $largura;
    private $titulo;
    private $tituloDoEixoX;
    private $tituloDoEixoY;
    private $id;
    private $dados;

    function __construct($altura,$largura,$id,$titulo,$tituloDoEixoX,$tituloDoEixoY){
       $this->altura=$altura;
       $this->largura=$largura;
       $this->titulo=$titulo;
       $this->tituloDoEixoX=$tituloDoEixoX;
       $this->tituloDoEixoY=$tituloDoEixoY;
       $this->id=$id;
    }

    
    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * @param mixed $largura
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getTituloDoEixoX()
    {
        return $this->tituloDoEixoX;
    }

    /**
     * @param mixed $tituloDoEixoX
     */
    public function setTituloDoEixoX($tituloDoEixoX)
    {
        $this->tituloDoEixoX = $tituloDoEixoX;
    }

    /**
     * @return mixed
     */
    public function getTituloDoEixoY()
    {
        return $this->tituloDoEixoY;
    }

    /**
     * @param mixed $tituloDoEixoY
     */
    public function setTituloDoEixoY($tituloDoEixoY)
    {
        $this->tituloDoEixoY = $tituloDoEixoY;
    }
    public function ConfiguracaoBarChart(): array
    {

        return
        ['data'   => json_encode($this->dados),
        'width'  => $this->largura,
        'height'  => $this->altura,
        'title'  => $this->titulo,
        'ytitle' => $this->tituloDoEixoY,
        'xtitle' => $this->tituloDoEixoX,
        'uniqid' => $this->id];
    }
    public function DadosParaChart(array $dados)
    {
         $this->dados=$dados;
    }
    public function CriarChartBar(): THtmlRenderer
    {
        if($this->dados == null) throw new Exception("Preciso passa dados pelo DadosParaChart");
        $barChart=new THtmlRenderer('app/resources/google_bar_chart.html');
        $barChart->enableSection("main",$this->ConfiguracaoBarChart());
        return $barChart;
    }
}

