<?php


class BarGoogleChart implements  BarChart
{

    private $altura;
    private $largura;
    private $titulo;
    private $tituloDoEixoX;
    private $tituloDoEixoY;
    private $id;

    function __construct($altura,$largura,$id,$titulo,$tituloDoEixoX,$tituloDoEixoY){
       $this->altura=$altura;
       $this->largura=$largura;
       $this->titulo=$titulo;
       $this->tituloDoEixoX=$tituloDoEixoX;
       $this->tituloDoEixoY=$tituloDoEixoY;
       $this->id=$id;
    }
    public function ConfiguracaoBarChart(): array
    {

        return
        [
          ""


      ];

    }

    public function DadosParaChart(array $dados)
    {
        // TODO: Implement DadosParaChart() method.
    }

    public function CriarChartBar()
    {
        // TODO: Implement CriarChartBar() method.
    }
}

