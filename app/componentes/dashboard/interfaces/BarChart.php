<?php


 interface BarChart{
   public function ConfiguracaoBarChart():Array;
   public function DadosParaChart(array $dados);
   public function CriarChartBar();

 }