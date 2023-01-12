<?php
    $al = array(
        array("nome" => "Samuel", "regiao" => "O", "custo" => 1),
        array("nome" => "Fabricio", "regiao" => "L", "custo" => 1),
        array("nome" => "Emanuel", "regiao" => "S", "custo" => 3),
        array("nome" => "Kaio", "regiao" => "S", "custo" => 20),
        array("nome" => "Hugo", "regiao" => "N", "custo" => 90)
    );

    $rota = Rota(5, $al);

    function Rota (5, $al){
            $rota = array();

            for ($i = 0; $i < 5; $i++) {
                $aluno = $al[$i];
                $reg = $aluno["regiao"];
                $cus = $aluno["custo"];

                if (!isset($rota[$reg])) {
                    $rota[$reg] = array();
                }

                $rota[$reg][] = array("nome" => $aluno["nome"], "custo" => $cus);
            }

            foreach ($rota as $reg => $al) {
                usort($al, function($NomeA, $NomeB) {
                    if ($NomeA["custo"] == $NomeB["custo"]) {
                        return sort($NomeA["nome"], $NomeB["nome"]);
                    }

                    return $NomeA["nome"] - $NomeB["nome"];
                });

                $rota[$reg] = $al;
            }

            return $rota;
        }

        foreach ($rotas as $regiao => $al) {
            foreach ($al as $aluno) {
                echo $aluno["nome"];
            }
        }