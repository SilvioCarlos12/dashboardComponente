<?php


use Adianti\Widget\Template\THtmlRenderer;

interface BarChart{
   public function ConfiguracaoBarChart():Array;
   public function DadosParaChart(array $dados);
   public function CriarChartBar():THtmlRenderer;

 }