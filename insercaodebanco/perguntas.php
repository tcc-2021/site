<?php
session_start()
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert no banco de dados</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script type="text/javascript">
        function deucerto(){
            alert("parabens, deu certo essa budega");
        }
    </script>
</head>

<body>  
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Inserir perguntas no banco de dados</h3>
                    <?php
                        if(isset($_SESSION['deucerto']))
                        {
                            echo '<script type="text/javascript">',
                                'deucerto();',
                                '</script>'
                                ;
                        }
                        unset($_SESSION['deucerto']);
                    ?>
                    <div class="box">
                        <form action="insert.php" method="POST" enctype="multipart/form-data">
                            <div class="field">
                                <div class="control">
                                    <select name="materia" id="materia">
                                        <option value="portugues">Português</option>
                                        <option value="matematica">Matemática</option>
                                        <option value="biologia">Biologia</option>
                                        <option value="geografia">Geografia</option>
                                        <option value="fisica">Física</option>
                                        <option value="quimica">Química</option>
                                        <option value="ingles">Inglês</option>
                                        <option value="historia">História</option>
                                    </select>                                
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="ano" type="number" class="input is-large" placeholder="ano" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea rows="10" cols="50" name="pergunta" type="text" class="input is-large" placeholder="pergunta"></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="resposta" class="input is-large" type="text" placeholder="Resposta: A B C D E">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="arquivo" class="input is-large" type="file" placeholder="arquivo">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Inserir</button>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </section>
</body>

</html>