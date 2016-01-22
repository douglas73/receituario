<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MedicacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('medicacao')->truncate();

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 1,
            'nome'                          => 'Neutrofer 150mg',
            'posologia'                     => 'Tomar 1 comprimido por dia durante uma refeição',
            'status'                        => 1,
        ]);
        $this->command->info('Medicação Neutrofer 150mg(1 comp. dia),  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 1,
            'nome'                          => 'Neutrofer 150mg',
            'posologia'                     => 'Tomar 1 comp duas vezes ao dia durante refeições',
            'status'                        => 1,
        ]);
        $this->command->info('Neutrofer 150mg,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 4,
            'nome'                          => 'Vimovo 500mg / 20mg',
            'posologia'                     => 'Neutrofer flaconete 50mg, Diluir 1 flaconete em 1/2 copo de água duas vezes ao dia, durante refeições.',
            'status'                        => 1,
        ]);
        $this->command->info('Vimovo 500mg / 20mg,  criada com sucesso!!!');



        \App\Medicacao::create([
            'categoria_medicacao_id'        => 4,
            'nome'                          => 'Nimesulida 100mg',
            'posologia'                     => 'Tomar 1 comp 1 a 2 vezes ao dia.',
            'status'                        => 1,
        ]);
        $this->command->info('Nimesulida 100mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 4,
            'nome'                          => 'Nisulid 100 mg',
            'posologia'                     => 'Tomar 1 comp 1 a 2 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Nisulid 100 mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 4,
            'nome'                          => 'Nimesulida suspensão oral 50mg/ml',
            'posologia'                     => 'Tomar 1 ml 1 a 2 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Nimesulida suspensão oral 50mg/ml,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 4,
            'nome'                          => 'Bi-Profenid',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Bi-Profenid,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 4,
            'nome'                          => 'Nisulid gel',
            'posologia'                     => 'Passar na área afetada 3 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Nisulid gel,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 2,
            'nome'                          => 'Zyxem 5mg',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Zyxem 5mg,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 2,
            'nome'                          => 'ALEKTOS',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('ALEKTOS,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 2,
            'nome'                          => 'ALLEGRA D',
            'posologia'                     => 'Tomar 1 comp ao acordar e ao deitar',
            'status'                        => 1,
        ]);
        $this->command->info('ALLEGRA D,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 2,
            'nome'                          => 'Cromalerg colírio',
            'posologia'                     => 'Pingar 2 gotas em cada olho 4 a 6 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Cromalerg colírio,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        =>21,
            'nome'                          => 'Patanol colírio',
            'posologia'                     => 'Pingar 1 gota em cada olho duas vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Patanol colírio,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'ASTRO 500mg',
            'posologia'                     => 'Tomar 1 comp ás segundas e quintas-feiras regularmente',
            'status'                        => 1,
        ]);
        $this->command->info('ASTRO 500mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'AZI 500mg',
            'posologia'                     => 'Tomar 1 comp ao dia por 3 dias',
            'status'                        => 1,
        ]);
        $this->command->info('AZI 500mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'ZITROMIL 500mg',
            'posologia'                     => 'Tomar 1 comp ao dia por 3 dias',
            'status'                        => 1,
        ]);
        $this->command->info('ZITROMIL 500mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'AZI suspensão 900mg',
            'posologia'                     => 'Tomar o volume equivalente a 300mg uma vez ao dia por 3 dias',
            'status'                        => 1,
        ]);
        $this->command->info('AZI suspensão 900mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'KLARICID UD',
            'posologia'                     => 'Tomar 1 comp ao dia por 7 dias',
            'status'                        => 1,
        ]);
        $this->command->info('KLARICID UD,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'AVALOX 400mg',
            'posologia'                     => 'Tomar 1 comp ao dia por 7 dias',
            'status'                        => 1,
        ]);
        $this->command->info('AVALOX 400mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'PROMIRA 400mg',
            'posologia'                     => 'Tomar 1 comp ao dia por 5 dias',
            'status'                        => 1,
        ]);
        $this->command->info('PROMIRA 400mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'FACTIVE 320mg',
            'posologia'                     => 'Tomar 1 comp ao dia por 5 dias',
            'status'                        => 1,
        ]);
        $this->command->info('FACTIVE 320mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'ZINNAT 500mg',
            'posologia'                     => 'Tomar 1 comp apás o café da manhã e o jantar por 7 dias',
            'status'                        => 1,
        ]);
        $this->command->info('ZINNAT 500mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'NOVAMOX 2X 875/125mg',
            'posologia'                     => 'Tomar 1 comp apás o café da manhã e o jantar por 7 dias',
            'status'                        => 1,
        ]);
        $this->command->info('NOVAMOX 2X 875/125mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'BACTRIM F',
            'posologia'                     => 'Tomar 1 comp de 12/12 h por 7 dias',
            'status'                        => 1,
        ]);
        $this->command->info('BACTRIM F,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'NORF 400mg',
            'posologia'                     => 'Tomar 1 comp de 12/12 h por 7 dias',
            'status'                        => 1,
        ]);
        $this->command->info('NORF 400mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'Klaricid UD',
            'posologia'                     => 'Tomar 1 comp uma vez ao dia por 7 dias',
            'status'                        => 1,
        ]);
        $this->command->info('Klaricid UD,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'TAMIRAM 500mg',
            'posologia'                     => 'Tomar 1 comp de 12/12 h por 7 dias',
            'status'                        => 1,
        ]);
        $this->command->info('TAMIRAM 500mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'CECLOR  250mg',
            'posologia'                     => 'Tomar 1 comp de 8/8 h por 10 dias',
            'status'                        => 1,
        ]);
        $this->command->info('CECLOR  250mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'CECLOR  500mg',
            'posologia'                     => 'Tomar 1 comp de 8/8 h por 10 dias',
            'status'                        => 1,
        ]);
        $this->command->info('CECLOR  500mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'Levoxin 500mg',
            'posologia'                     => 'Tomar 1 comp de 12/12 h por 7 dias',
            'status'                        => 1,
        ]);
        $this->command->info('Levoxin 500mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 3,
            'nome'                          => 'CIPRO XR 1.000mg',
            'posologia'                     => 'Tomar 1 comp ao dia por 14 dias',
            'status'                        => 1,
        ]);
        $this->command->info('CIPRO XR 1.000mg,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 5,
            'nome'                          => 'Stavigile 200mg',
            'posologia'                     => 'Tomar 1 comp ao acordar e ás 12:00h',
            'status'                        => 1,
        ]);
        $this->command->info('Stavigile 200mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Fostair 6/100',
            'posologia'                     => 'Inalar ao acordar e ao deitar. Inalar uma dose extra em caso de dificuldade para respirar ou de chiado no peito. Inovare (2675 6900)',
            'status'                        => 1,
        ]);
        $this->command->info('Fostair 6/100,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Fostair 6/100',
            'posologia'                     => 'Inalar 2 jatos ao acordar e ao deitar. Inalar uma dose extra em caso de dificuldade para respirar ou de chiado no peito. Inovare (2675 6900)',
            'status'                        => 1,
        ]);
        $this->command->info('Fostair 6/100,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Foraseq 6/200',
            'posologia'                     => 'Inalar uma cápsula do tratamento 1 (formoterol) e do tratamento 2 (budesonida) ao acordar e ao deitar. Fazer uma inalação de ambas as cápsulas em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente. SAC: 0800 888 3003',
            'status'                        => 1,
        ]);
        $this->command->info('Foraseq 6/200,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Foraseq 12/200',
            'posologia'                     => 'Inalar uma cápsula do tratamento 1 (formoterol) e do tratamento 2 (budesonida) ao acordar e ao deitar. Fazer uma inalação de ambas as cápsulas em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente. SAC: 0800 888 3003',
            'status'                        => 1,
        ]);
        $this->command->info('Foraseq 12/200,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Foraseq 12/400',
            'posologia'                     => 'Inalar uma cápsula do tratamento 1 (formoterol) e do tratamento 2 (budesonida) ao acordar e ao deitar. Fazer uma inalação de ambas as cápsulas em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente.\r\nSAC: 0800 888 3003\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Foraseq 12/400,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Foraseq 12/400',
            'posologia'                     => 'Inalar uma cápsula do tratamento 1 (formoterol) e do tratamento 2 (budesonida) 4 vezes ao dia (ao acordar, apás o almoço, ao final da tarde e ao deitar)  por 2 semanas. Apás esse prazo, inalar uma cápsula do tratamento 1 (formoterol) e do tratamento 2 (budesonida) ao acordar e ao deitar. Fazer uma inalação de ambas as cápsulas em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente.\r\nSAC: 0800 888 3003\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Foraseq 12/400,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Zenhale 50/5',
            'posologia'                     => 'Inalar ao acordar e ao deitar. Inalar uma dose extra em caso de dificuldade para respirar ou de chiado no peito.  0800 012 2232',
            'status'                        => 1,
        ]);
        $this->command->info('Zenhale 50/5,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Zenhale 100/5',
            'posologia'                     => 'Inalar ao acordar e ao deitar. Inalar uma dose extra em caso de dificuldade para respirar ou de chiado no peito. 0800 012 2232',
            'status'                        => 1,
        ]);
        $this->command->info('Zenhale 100/5,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Zenhale 200/5',
            'posologia'                     => 'Inalar ao acordar e ao deitar. Inalar uma dose extra em caso de dificuldade para respirar ou de chiado no peito. 0800 012 2232',
            'status'                        => 1,
        ]);
        $this->command->info('Zenhale 200/5,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Spiriva Respimat',
            'posologia'                     => 'Fazer duas inalações ao acordar. \r\nSAC: 0800 728 3324',
            'status'                        => 1,
        ]);
        $this->command->info('Spiriva Respimat,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Onbrize150mcg',
            'posologia'                     => 'Inalar uma cápsula uma vez ao dia.\r\nSAC: 0800 888 3003\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Onbrize150mcg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Onbrize300mcg',
            'posologia'                     => 'Inalar uma cápsula uma vez ao dia.\r\nSAC: 0800 888 3003\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Onbrize300mcg,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Symbicort 6/100',
            'posologia'                     => 'Fazer uma inalação ao acordar e ao deitar. Fazer uma inalação em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente.',
            'status'                        => 1,
        ]);
        $this->command->info('Symbicort 6/100,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Symbicort 6/200',
            'posologia'                     => 'Fazer uma inalação ao acordar e ao deitar. Fazer uma inalação em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente.\r\nSAC: 0800 014 5578\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Symbicort 6/200,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Symbicort 12/400',
            'posologia'                     => 'Fazer uma inalação ao acordar e ao deitar. Fazer uma inalação em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente.\r\n		SAC: 0800 014 5578\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Symbicort 12/400,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Symbicort 6/200',
            'posologia'                     => 'Fazer uma inalação 4 vezes ao dia (ao acordar, apás o almoço, ao final da tarde e ao deitar) por 2 semanas.  Apás esse prazo, fazer uma inalação ao acordar e ao deitar. Fazer uma inalação em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente.\r\nSAC: 0800 014 5578\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Symbicort 6/200,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 1,
            'nome'                          => 'Symbicort 12/400',
            'posologia'                     => 'Fazer uma inalação 4 vezes ao dia (ao acordar, apás o almoço, ao final da tarde e ao deitar) por 2 semanas.  Apás esse prazo, fazer uma inalação ao acordar e ao deitar. Fazer uma inalação em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente.\r\nSAC: 0800 014 5578\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Symbicort 12/400,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Vannair 6/100',
            'posologia'                     => 'Fazer uma inalação ao acordar e ao deitar. Fazer uma inalação em caso de dificuldade respiratória, independentemente de já ter inalado uma dose anteriormente.\r\nSAC: 0800 014 5578\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Vannair 6/100,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Combivent',
            'posologia'                     => 'Inalar 2 jatos 4 vezes dia',
            'status'                        => 1,
        ]);
        $this->command->info('Combivent,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Duovent',
            'posologia'                     => 'Inalar 2 jatos 4 vezes dia',
            'status'                        => 1,
        ]);
        $this->command->info('Duovent,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Seretide 25/250 spray',
            'posologia'                     => 'Fazer uma inalação ao acordar e ao deitar.',
            'status'                        => 1,
        ]);
        $this->command->info('Seretide 25/250 spray,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Seretide 50/250 diskus',
            'posologia'                     => 'Fazer uma inalação ao acordar e ao deitar.',
            'status'                        => 1,
        ]);
        $this->command->info('Seretide 50/250 diskus,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 1,
            'nome'                          => 'Seretide 50/500 diskus',
            'posologia'                     => 'Fazer uma inalação ao acordar e ao deitar.',
            'status'                        => 1,
        ]);
        $this->command->info('Seretide 50/500 diskus,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Alvesco 160mg',
            'posologia'                     => 'Fazer uma inalação ao acordar e ao deitar.',
            'status'                        => 1,
        ]);
        $this->command->info('Alvesco 160mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 1,
            'nome'                          => 'Fluir',
            'posologia'                     => 'Inalar 1 cápsula imediatamente antes do Oximax. Inalar outra cápsula a qualquer momento em caso de desconforto respiratório.',
            'status'                        => 1,
        ]);
        $this->command->info('Fluir,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Oximax 200ug',
            'posologia'                     => 'Inalar 1 cápsula uma vez ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Oximax 200ug,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Oximax 400ug',
            'posologia'                     => 'Inalar 1 cápsula uma vez ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Oximax 400ug,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Foradil',
            'posologia'                     => 'Inalar uma cápsula em caso de dificuldade respiratória',
            'status'                        => 1,
        ]);
        $this->command->info('Foradil,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Miflonide 200mcg',
            'posologia'                     => 'Inalar 1 cápsula ao acordar e ao deitar',
            'status'                        => 1,
        ]);
        $this->command->info('Miflonide 200mcg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Fluir',
            'posologia'                     => 'Inalar uma cápsula em caso de dificuldade respiratória',
            'status'                        => 1,
        ]);
        $this->command->info('Fluir,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Formare',
            'posologia'                     => 'Inalar uma cápsula em caso de dificuldade respiratória.',
            'status'                        => 1,
        ]);
        $this->command->info('Formare,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Formoterol',
            'posologia'                     => 'Inalar uma cápsula em caso de dificuldade respiratória',
            'status'                        => 1,
        ]);
        $this->command->info('Formoterol,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Duovent',
            'posologia'                     => 'Inalar 2 jatos em caso de falta de ar',
            'status'                        => 1,
        ]);
        $this->command->info('Duovent,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Atrovent N',
            'posologia'                     => 'Inalar 2 jatos em caso de falta de ar',
            'status'                        => 1,
        ]);
        $this->command->info('Atrovent N,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Bambair',
            'posologia'                     => 'Tomar 10 ml uma vez ao dia em caso de dificuldade respiratória',
            'status'                        => 1,
        ]);
        $this->command->info('Bambair,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Daxas',
            'posologia'                     => 'Tomar 1 comp uma vez ao dia,ao deitar',
            'status'                        => 1,
        ]);
        $this->command->info('Daxas,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Clenil Jet 250 mcg',
            'posologia'                     => 'Inalar 1 jato ao acordar e ao deitar.',
            'status'                        => 1,
        ]);
        $this->command->info('Clenil Jet 250 mcg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Clenil Jet 250 mcg',
            'posologia'                     => 'Inalar 1 jato 4 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Clenil Jet 250 mcg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Clenil Pulvinal 100 200  400',
            'posologia'                     => 'Fazer uma inalação ao acordar e ao deitar',
            'status'                        => 1,
        ]);
        $this->command->info('Clenil Pulvinal 100 200  400,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Clenil A',
            'posologia'                     => 'Nebulizar 1 flaconete ao acordar e ao deitar',
            'status'                        => 1,
        ]);
        $this->command->info('Clenil A,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Clenil Compositum A',
            'posologia'                     => '(Em crise de asma) Nebulizar 1 flaconete 4 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Clenil Compositum A,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Pulmicort sachet para nebulização',
            'posologia'                     => 'Nebulizar 1 sachet pela manhã e á noite',
            'status'                        => 1,
        ]);
        $this->command->info('Pulmicort sachet para nebulização,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Pulmicort sachet para nebulização',
            'posologia'                     => 'Nebulizar 1 sachet pela manhã e á noite',
            'status'                        => 1,
        ]);
        $this->command->info('Pulmicort sachet para nebulização,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Berotec gotas',
            'posologia'                     => 'Nebulizar 5 gotas diluídas em 2ml de soro fisiológico em caso de falta de ar',
            'status'                        => 1,
        ]);
        $this->command->info('Berotec gotas,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Atrovent gotas',
            'posologia'                     => 'Nebulizar 25 gotas diluídas em 2ml de soro fisiológico em caso de falta de ar',
            'status'                        => 1,
        ]);
        $this->command->info('Atrovent gotas,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Omnaris',
            'posologia'                     => 'Lavar as narinas com soro fisiológico ou com água antes de aplicar o remédio.\r\nInalar 2 jatos/narina 1 vez ao dia. \r\nApás colocar o bico do aplicador na narina, apontá-lo para a face lateral do nariz e aplicar a medicação.\r\nHigiene oral apás a inalação. Colocar um gole dágua na boca, bochechar, gargarejar e cuspir. Repetir esse procedimento 3 a 5 vezes.\r\n0800 7710345\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Omnaris,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Budecort Acqua 32 mcg',
            'posologia'                     => 'Lavar as narinas com soro fisiológico ou com água antes de aplicar o remédio.\r\nInalar 1 jato/narina ao acordar e ao deitar. \r\nApás colocar o bico do aplicador na narina, apontá-lo para a face lateral do nariz e aplicar a medicação.\r\nHigiene oral apás a inalação. Colocar um gole dágua na boca, bochechar, gargarejar e cuspir. Repetir esse procedimento 3 a 5 vezes.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Budecort Acqua 32 mcg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Budecort Acqua 64 mcg',
            'posologia'                     => 'Lavar as narinas com soro fisiológico ou com água antes de aplicar o remédio.\r\nInalar 1 jato/narina ao acordar e ao deitar. \r\nApás colocar o bico do aplicador na narina, apontá-lo para a face lateral do nariz e aplicar a medicação.\r\nHigiene oral apás a inalação. Colocar um gole dágua na boca, bochechar, gargarejar e cuspir. Repetir esse procedimento 3 a 5 vezes.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Budecort Acqua 64 mcg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Busonid nasal 50 mcg',
            'posologia'                     => 'Lavar as narinas com soro fisiológico ou com água antes de aplicar o remédio.\r\nInalar 1 jato/narina ao acordar e ao deitar. \r\nApás colocar o bico do aplicador na narina, apontá-lo para a face lateral do nariz e aplicar a medicação.\r\nHigiene oral apás a inalação. Colocar um gole dágua na boca, bochechar, gargarejar e cuspir. Repetir esse procedimento 3 a 5 vezes.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Busonid nasal 50 mcg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Nasonex',
            'posologia'                     => 'Lavar as narinas com soro fisiológico ou com água antes de aplicar o remédio.\r\nInalar 1 jato/narina 1 vez ao dia. \r\nApás colocar o bico do aplicador na narina, apontá-lo para a face lateral do nariz e aplicar a medicação.									   \r\nHigiene oral apás a inalação. Colocar um gole dágua na boca, bochechar, gargarejar e cuspir. Repetir esse procedimento 3 a 5 vezes.  \r\n0800 012 2232\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Nasonex,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Noex',
            'posologia'                     => 'Lavar as narinas com soro fisiológico ou com água antes de aplicar o remédio.\r\nInalar 1 jato/narina 1 vez ao dia. \r\nApás colocar o bico do aplicador na narina, apontá-lo para a face lateral do nariz e aplicar a medicação.\r\nHigiene oral apás a inalação. Colocar um gole dágua na boca, bochechar, gargarejar e cuspir. Repetir esse procedimento 3 a 5 vezes.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Noex,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Avamys',
            'posologia'                     => 'Lavar as narinas com soro fisiológico ou com água antes de aplicar o remédio.\r\nInalar 1 jato/narina 1 vez ao dia. \r\nApás colocar o bico do aplicador na narina, apontá-lo para a face lateral do nariz e aplicar a medicação.\r\nHigiene oral apás a inalação. Colocar um gole dágua na boca, bochechar, gargarejar e cuspir. Repetir esse procedimento 3 a 5 vezes.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Avamys,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Plurair',
            'posologia'                     => 'Lavar as narinas com soro fisiológico ou com água antes de aplicar o remédio.\r\nInalar 1 jato/narina 1 vez ao dia. \r\nApás colocar o bico do aplicador na narina, apontá-lo para a face lateral do nariz e aplicar a medicação.\r\nHigiene oral apás a inalação. Colocar um gole dágua na boca, bochechar, gargarejar e cuspir. Repetir esse procedimento 3 a 5 vezes.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Plurair,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Salsep',
            'posologia'                     => 'Inalar 1 jato/narina em caso de secreção ou de prurido nasal',
            'status'                        => 1,
        ]);
        $this->command->info('Salsep,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Maresis',
            'posologia'                     => 'Inalar 1 jato/narina duas vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Maresis,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Maxidrate gel nasal',
            'posologia'                     => 'Colocar na narina em caso de ressecamento nasal',
            'status'                        => 1,
        ]);
        $this->command->info('Maxidrate gel nasal ,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Nasaleze',
            'posologia'                     => 'Inalar 1 jato/narina 4 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Nasaleze,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Prelone 20mg',
            'posologia'                     => 'Tomar 2 comp (40mg) ás 15h por 3 dias.',
            'status'                        => 1,
        ]);
        $this->command->info('Prelone 20mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Prelone 20mg',
            'posologia'                     => 'Tomar 2 comp (40mg) ás 15h por 5 dias.',
            'status'                        => 1,
        ]);
        $this->command->info('Prelone 20mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Prelone 20mg',
            'posologia'                     => '1º ao 3º dia: tomar 3 comp (60mg) ás 15h.\r\n4º ao 6º dia: tomar 2 comp (40mg) ás 15h.\r\n7º ao 10º dia: tomar 1 comp (20mg) ás 15h.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Prelone 20mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Prelone 3mg/ml',
            'posologia'                     => 'Tomar  ml (  mg) ás 15h por 3/5 dias.',
            'status'                        => 1,
        ]);
        $this->command->info('Prelone 3mg/ml,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Prelone 3mg/ml',
            'posologia'                     => '1º ao 3º dia: tomar  ml (  mg) ás 15h por 3 dias.\r\n4º ao 5º dia: tomar  ml (  mg)  ás 15h por 3 dias.\r\n6º ao 7º dia: tomar  ml (  mg) ás 15h por 3 dias.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Prelone 3mg/ml,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Teolong 200mg',
            'posologia'                     => 'Tomar 1 comp ao acordar e 2 comp ao deitar',
            'status'                        => 1,
        ]);
        $this->command->info('Teolong 200mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Champix',
            'posologia'                     => 'Tomar 1 comp 2 vezes ao dia (com pelo menos 8 h de intervalo) por, pelo menos, 3  meses.',
            'status'                        => 1,
        ]);
        $this->command->info('Champix,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Zetron',
            'posologia'                     => 'Tomar 1 comp 2vezes ao dia (com pelo menos 8 h de intervalo) por 3  meses',
            'status'                        => 1,
        ]);
        $this->command->info('Zetron,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Singulair 10mg',
            'posologia'                     => 'Tomar 1 comp 1 vez ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Singulair 10mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Concentrador de oxigênio',
            'posologia'                     => '3L/min: quando estiver em repouso.\r\n5L/min: durante o esforço, o banho, as refeições e o sono.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Concentrador de oxigênio,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 6,
            'nome'                          => 'Daxas',
            'posologia'                     => 'Tomar 1 comp ao deitar',
            'status'                        => 1,
        ]);
        $this->command->info('Daxas,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 7,
            'nome'                          => 'Valeriane 50mg',
            'posologia'                     => 'Tomar 1 drágea trás vezes ao dia por 3 semanas. Apás esse prazo, passar a tomar 1 drágea duas vezes ao dia.',
            'status'                        => 1,
        ]);
        $this->command->info('Valeriane 50mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 8,
            'nome'                          => 'Glifage 500mg',
            'posologia'                     => 'Tomar 1 comp apás o café da manhã e o jantar, diariamente',
            'status'                        => 1,
        ]);
        $this->command->info('Glifage 500mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 9,
            'nome'                          => 'Silif 50mg',
            'posologia'                     => 'Tomar 1 comp quatro vezes ao dia.',
            'status'                        => 1,
        ]);
        $this->command->info('Silif 50mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 9,
            'nome'                          => 'Silif 100mg',
            'posologia'                     => 'Tomar 1 comp duas vezes ao dia (manhã e noite)',
            'status'                        => 1,
        ]);
        $this->command->info('Silif 100mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 9,
            'nome'                          => 'Silif 100mg',
            'posologia'                     => 'Tomar 1 comp trás vezes ao dia (manhã, início da tarde e noite)',
            'status'                        => 1,
        ]);
        $this->command->info('Silif 100mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 10,
            'nome'                          => 'Dieta laxativa',
            'posologia'                     => '4 laranjas lima\r\n½ mamão papaya\r\n2 ameixas pretas secas\r\n1 colher de sopa de farinha de linhaça dourada (Jasmine)\r\nágua\r\n\r\nTomar 1 copo em jejum por 5 dias\r\n\r\n3 colheres de sopa de abacate apás o almoço, por 5 dias.\r\n\r\nTomar 10 copos de água no intervalo entre as refeições.\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Dieta laxativa,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 11,
            'nome'                          => 'Lyrica 75mg 150mg (Dor neuropática)',
            'posologia'                     => 'Tomar 1 comp de 12 em 12 horas.\r\n\r\nEfeitos colaterais: tonteira e sonolência',
            'status'                        => 1,
        ]);
        $this->command->info('Lyrica 75mg 150mg (Dor neuropática),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 11,
            'nome'                          => 'Toragesic sublingual 10mg',
            'posologia'                     => 'Colocar 1 comprimido sob a língua e deixar dissolver em caso de dor.\r\nDose máxima: 5 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Toragesic sublingual 10mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'UNCKAN (Adulto) -Gripe',
            'posologia'                     => 'Tomar 30 gotas 3 vezes ao dia, antes das refeições. Manter a medicação por 5 dias apás o fim dos sintomas',
            'status'                        => 1,
        ]);
        $this->command->info('UNCKAN (Adulto) -Gripe,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'UNCKAN (6 a 12 anos) - Gripe',
            'posologia'                     => 'Tomar 20 gotas 3 vezes ao dia, antes das refeições. Manter a medicação por 5 dias apás o fim dos sintomas.',
            'status'                        => 1,
        ]);
        $this->command->info('UNCKAN (6 a 12 anos) - Gripe,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'KALOBA (gripe)',
            'posologia'                     => 'Tomar 30 gotas 3 vezes ao dia, antes das refeições. Manter a medicação por 5 dias apás o fim dos sintomas',
            'status'                        => 1,
        ]);
        $this->command->info('KALOBA (gripe),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'TRIMEDAL (gripe)',
            'posologia'                     => 'Tomar 1 comp 3 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('TRIMEDAL (gripe),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'TRIMEDAL tosse',
            'posologia'                     => 'Colocar 1 fita sob a língua 3 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('TRIMEDAL tosse,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'NALDECON DIA/NOITE (gripe)',
            'posologia'                     => 'Tomar 1 comp de manhã e de noite',
            'status'                        => 1,
        ]);
        $this->command->info('NALDECON DIA/NOITE (gripe),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'FLUIMUICIL D (gripe)',
            'posologia'                     => 'Dissolver um comp em um copo de água 2 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('FLUIMUICIL D (gripe),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'TAMIFLU 75mg',
            'posologia'                     => 'Tomar 1 comp 2 vezes ao dia por 5 dias',
            'status'                        => 1,
        ]);
        $this->command->info('TAMIFLU 75mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'PENETRO INALANTE (gripe)',
            'posologia'                     => 'Diluir 1 colher de café em um copo de água quente e inalar os vapores. Trás vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('PENETRO INALANTE (gripe),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'SEKI (tosse)',
            'posologia'                     => 'Tomar 1 copo-medida em caso de tosse persistente, até 3 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('SEKI (tosse),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'PERCOF (tosse)',
            'posologia'                     => 'Tomar 1 copo-medida em caso de tosse persistente, até 3 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('PERCOF (tosse),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 13,
            'nome'                          => 'Gotas Binelli (tosse)',
            'posologia'                     => 'Tomar 40 gotas em caso de tosse persistente, até 3 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Gotas Binelli (tosse),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 14,
            'nome'                          => 'Zovirax (Aciclovir) Creme 50mg',
            'posologia'                     => 'Aplicar na lesão de pele 5 vezes ao dia, com intervalos de, aproximadamente, 5 horas, suprimindo a aplicação no período noturno. Usar durante 5-10 dias',
            'status'                        => 1,
        ]);
        $this->command->info('Zovirax (Aciclovir) Creme 50mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 14,
            'nome'                          => 'Zovirax (Aciclovir) comprimidos 200mg',
            'posologia'                     => 'Tomar um comprimido de Zovirax 200 mg, cinco vezes ao dia, com intervalos de aproximadamente 4 horas, omitindo-se a dose noturna',
            'status'                        => 1,
        ]);
        $this->command->info('Zovirax (Aciclovir) comprimidos 200mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 15,
            'nome'                          => 'Crestor 5mg',
            'posologia'                     => 'Tomar 1 comp ao deitar.\r\n\r\n\r\nwww.programafazbem.com.br   SAC: 0800 014 5578\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Crestor 5mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 15,
            'nome'                          => 'Crestor 10mg',
            'posologia'                     => 'Crestor 10mg\r\nTomar 1 comp ao deitar.\r\nUso oral\r\n\r\nSAC: 0800 014 5578\r\n\r\n',
            'status'                        => 1,
        ]);
        $this->command->info('Crestor 10mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 15,
            'nome'                          => 'Crestor 20mg',
            'posologia'                     => 'Tomar 1 comp ao deitar.\r\n\r\n\r\nSAC: 0800 014 5578',
            'status'                        => 1,
        ]);
        $this->command->info('Crestor 20mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 15,
            'nome'                          => 'Lipistat 10mg',
            'posologia'                     => 'Tomar 1 comp ao deitar',
            'status'                        => 1,
        ]);
        $this->command->info('Lipistat 10mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 15,
            'nome'                          => 'Plenance 10mg',
            'posologia'                     => 'Tomar 1 comp ao deitar',
            'status'                        => 1,
        ]);
        $this->command->info('Plenance 10mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 17,
            'nome'                          => 'Atacand 8mg',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Atacand 8mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 17,
            'nome'                          => 'Atacand 16mg',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Atacand 16mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 17,
            'nome'                          => 'Atacand HCT 8/12,5mg',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Atacand HCT 8/12,5mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 17,
            'nome'                          => 'Atacand HCT 16/12,5mg',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Atacand HCT 16/12,5mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 18,
            'nome'                          => 'Tracleer (Bosentan) 125mg',
            'posologia'                     => 'Tomar ½ comp de manhã e de noite por 1 mês. A partir do mês seguinte, tomar 1 comp de manhã e de noite.',
            'status'                        => 1,
        ]);
        $this->command->info('Tracleer (Bosentan) 125mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 18,
            'nome'                          => 'Hepatograma mensal',
            'posologia'                     => '',
            'status'                        => 1,
        ]);
        $this->command->info('Hepatograma mensal,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 19,
            'nome'                          => 'Histoplasmose',
            'posologia'                     => 'Sporanox (Itraconazol) 100mg\r\nTomar 2 comp (200mg) 2 vezes ao dia por 3 meses. Nos 3 meses seguintes, tomar 2 comp (200mg) uma vez ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Histoplasmose,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 19,
            'nome'                          => 'Sporanox 100mg (micose profunda)',
            'posologia'                     => 'Tomar 2 cápsulas (200mg) 3 vezes ao dia, apás as refeições, nos 3 primeiros dias. A partir do quarto dia, tomar 2 cápsulas (200mg) 2 vezes ao dia, apás as refeições até o desaparecimento da micose',
            'status'                        => 1,
        ]);
        $this->command->info('Sporanox 100mg (micose profunda),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 20,
            'nome'                          => 'Fluimucil 600 efervescente',
            'posologia'                     => 'Diluir 1 comp em 1 copo de água 3 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Fluimucil 600 efervescente,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 26,
            'nome'                          => 'Diprosalic pomada (Uso tópico)',
            'posologia'                     => 'Aplicar sobre as picadas 2 vezes ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('Diprosalic pomada (Uso tópico),  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 33,
            'nome'                          => 'Nexium 40mg',
            'posologia'                     => 'Tomar 1 comp ao deitar por 4 semanas.\r\nSAC: 0800 014 5578',
            'status'                        => 1,
        ]);
        $this->command->info('Nexium 40mg,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 31,
            'nome'                          => 'Annita',
            'posologia'                     => 'Tomar 1 comp 2 vezes ao dia por 3 dias',
            'status'                        => 1,
        ]);
        $this->command->info('Annita,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'PHARMATON',
            'posologia'                     => 'Tomar 1 comp pela manhã',
            'status'                        => 1,
        ]);
        $this->command->info('PHARMATON,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'OSCAL 500 + D',
            'posologia'                     => 'Tomar 1 comp no almoço e no jantar',
            'status'                        => 1,
        ]);
        $this->command->info('OSCAL 500 + D,  criada com sucesso!!!');

        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'COMBIRON',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('COMBIRON,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'CENTRUM',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('CENTRUM,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'Combiron suspensão oral',
            'posologia'                     => 'Tomar 1 copo-medida (10 ml) 1 vez ao dia em dias alternados',
            'status'                        => 1,
        ]);
        $this->command->info('Combiron suspensão oral,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'ELEVIT GERIÁTRICO',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('ELEVIT GERIÁTRICO,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'SUPRADYN',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('SUPRADYN,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'Ginseng 50 plus',
            'posologia'                     => 'Tomar 1 comp no almoço e no jantar',
            'status'                        => 1,
        ]);
        $this->command->info('Ginseng 50 plus,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'Gerovital com Ginseng',
            'posologia'                     => 'Tomar 1 comp no almoço e no jantar',
            'status'                        => 1,
        ]);
        $this->command->info('Gerovital com Ginseng,  criada com sucesso!!!');


        \App\Medicacao::create([
            'categoria_medicacao_id'        => 32,
            'nome'                          => 'VITERGAN ZINCO PLUS',
            'posologia'                     => 'Tomar 1 comp ao dia',
            'status'                        => 1,
        ]);
        $this->command->info('VITERGAN ZINCO PLUS,  criada com sucesso!!!');

    }
}
