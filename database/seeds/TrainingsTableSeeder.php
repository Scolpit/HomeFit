<?php

use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert(['id' => 1,'label' => 'Aquecimento','description' => 'Prepare os seus músculos antes de treinar. Esta é a chave para evitar lesões e para tirar o máximo proveito do seu treino.','time' => '04:48','ishomesafe' => false,'iswarming' => true,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 2,'label' => 'Alongamento','description' => 'Relaxe os seus músculos com esta rotina de alongamento. A chave para a recuperação e para conseguir melhores resultados.','time' => '08:24','ishomesafe' => true,'iswarming' => false,'isstretching' => true]);
        DB::table('trainings')->insert(['id' => 3,'label' => 'Alpha','description' => 'Eleve a sua frequência cardíaca enquanto treina peito, braços, coxas e nádegas.','time' => '2-5','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 4,'label' => 'Bravo','description' => 'Treine o seu corpo da cabeça aos pés com exercícios específicos para peito, braços, coxas e nádegas.','time' => '3-6','ishomesafe' => true,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 5,'label' => 'Charlie','description' => 'Ideal para queima de gordura com muitos exercícios de cardio e torso. E ainda exercite peito, braços, coxas e rabo.','time' => '4-7','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 6,'label' => 'Delta','description' => 'Este treino é puro cardio. Aumente seu ritmo cardíaco e queime muitas calorias e gordura.','time' => '4-11','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 7,'label' => 'Echo','description' => 'Este treino define pernas e abdômen. Sobe seu ritmo cardíaco e trabalha a parte superior do seu corpo.','time' => '9-10','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 8,'label' => 'Foxtrot','description' => 'O foco principal deste treino é o núcleo e o abdômen com alguns exercícios extras para seus braços, nádegas e coxas.','time' => '9-17','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 9,'label' => 'Golf','description' => 'Uma mistura de cardio, força e exercícios isométricos faz você queimar gordura do corpo todo.','time' => '9-15','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 10,'label' => 'Hotel','description' => 'Tudo para o seu peito e abdômen. Além disso, cardio adicional para queimar gordura e secar seu abs.','time' => '10-16','ishomesafe' => true,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 11,'label' => 'India','description' => 'Trabalhe seu abdômen inferior, tríceps e peito enquanto melhora o seu equilíbrio, controle e estabilidade do núcleo','time' => '13-18','ishomesafe' => true,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 12,'label' => 'Juliet','description' => 'Foque nos braços e abdômen, suba o ritmo cardíaco e queime calorias. E prepare-se para um novo exercício de flexão.','time' => '15-30','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 13,'label' => 'Kilo','description' => 'Prepare suas pernas e ombros para um exercício incrível, enquanto ativa o seu núcleo eleva seu ritmo cardíaco.','time' => '15-20','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 14,'label' => 'Lima','description' => 'Trabalhe seus braços, pernas e abdômen com esta combinação perfeita de movimentos para queimar gordura.','time' => '15-25','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 15,'label' => 'Mike','description' => 'O foco deste exercício são os braços que executam movimentos de prancha para aumentar a força e o controle do núcleo.','time' => '15-26','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 16,'label' => 'November','description' => 'Seu abdômen e pernas serão testados com este exercício intensivo de cardio para queimar gordura.','time' => '19-33','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 17,'label' => 'Oscar','description' => 'Este óptimo treino volta ao básico com exercícios para as partes superior e inferior, com uma pitada de núcleo e abdómen.','time' => '21-35','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 18,'label' => 'Papa','description' => 'Este exercício se concentra nos ombros, mas você também vai notar que a prancha clássica é um treino para todo o corpo','time' => '27-45','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 19,'label' => 'Quebec','description' => 'Queime pernas e abdomen com este treino. E ainda, conheça seu mais novo amigo - o burpee!','time' => '33-39','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 20,'label' => 'Romeo','description' => 'Quer fortalecer seu abs, braços e cardio? Este é o exercício perfeito para peito, tríceps e abdómen inferior.','time' => '33-45','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 21,'label' => 'Sierra','description' => 'Treine seu corpo todo com um extra de cardio para queimar gordura. Seu abdomen, pernas e braços vão agradecer!','time' => '35-42','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 22,'label' => 'Tango','description' => 'Burpees, flexões e agachamentos! Trabalhe suas pernas, rabo, peito, bíceps e costas. Vai conseguir!','time' => '37-50','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 23,'label' => 'Uniform','description' => 'Quer braços fortes e sedutores? Além disso, temos alguns exercícios pliométricos de perna para adicionar cardio.','time' => '39-60','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 24,'label' => 'Victor','description' => 'Eleve seu ritmo cardíaco durante o treino e diminua sua cintura. Sinta o abdômen e os braços queimarem.','time' => '40-60','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 25,'label' => 'Whiskey','description' => 'Coloque todo o seu corpo a trabalhar. Variações de burpees, agachamentos e flexões para conquistar um corpo definido e sexy.','time' => '50-60','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
        DB::table('trainings')->insert(['id' => 26,'label' => 'X-ray','description' => 'Hora de queimar calorias! Deixe seu corpo em forma com exercícios combinados para vários grupos musculares.','time' => '50-65','ishomesafe' => false,'iswarming' => false,'isstretching' => false]);
    }
}
