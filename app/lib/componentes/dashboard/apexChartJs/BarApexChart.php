<?php


class BarApexChart implements BarChart{

    private $altura;
    private $largura;
    private $titulo;
    private $id;
    private $dados;

    function __construct($altura,$largura,$id,$titulo){
        $this->altura=$altura;
        $this->largura=$largura;
        $this->titulo=$titulo;
        $this->id=$id;
    }


public function ConfiguracaoBarChart(): array
{
    return
    ['data'   => json_encode($this->dados),
    'width'  => $this->largura,
    'height'  => $this->altura,
    'title'  => $this->titulo,
    'uniqid' => $this->id];

}
    public function DadosParaChart(array $dados)
    {
        $this->dados=$dados;
    }
    public function CriarChartBar(): \Adianti\Widget\Template\THtmlRenderer
    {
        if($this->dados == null) throw new Exception("Preciso passa dados pelo DadosParaChart");
        $barChart=new THtmlRenderer('app/resources/apexjs_bar.html');
        $barChart->enableSection("main",$this->ConfiguracaoBarChart());
        return $barChart;  // TODO: Implement CriarChartBar() method.
    }
}