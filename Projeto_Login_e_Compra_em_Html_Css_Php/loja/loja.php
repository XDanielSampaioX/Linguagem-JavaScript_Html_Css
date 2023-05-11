<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store-Products</title>
    <link rel="stylesheet" href="store-style.css">
</head>
<body>
    <section class="container">
        <main class="container-principal">
            <h1 class="titulo">Bem vindo a PC-Store, Temos a seguir as seguintes opçôes</h1>
            <p class="frase">Notebook e Desktop, selecione a seguir qual opção você deseja consultar:</p>

            <div class="imagens-opcoes">
                <div class="card-opt">
                    <form action="preços.php" class="formulario-computador" method="post">
                        <img src="img/computador.png" alt="Opção a selecionar: Computador" class="computer">
                        <h2 class="computador-titulo">Computador</h2>
                        <div class="opcoes-pecas-pc">
                            <select name="computador-opcoes-cpu" id="computador-opcoes">
                                <option value="1">I3</option>
                                <option value="2">I5</option>
                                <option value="3">I7</option>
                                <option value="4">I9</option>
                            </select>
                            <select name="computador-opcoes-monitor" id="computador-opcoes">
                                <option value="1">Noc 12'</option>
                                <option value="2">Samsung 16'</option>
                                <option value="3">LG 25'</option>
                                <option value="4">DELL 10'</option>
                            </select>
                            <select name="computador-opcoes-mem" id="computador-opcoes-mem">
                                <option value="1">4gb-ddr3</option>
                                <option value="2">4gb-ddr4</option>
                                <option value="3">8gb-ddr4</option>
                                <option value="4">12gb-ddr4</option>
                            </select>
                            <select name="computador-opcoes-hd/ssd" id="computador-opcoes">
                                <option value="1">HD-200GB</option>
                                <option value="2">SSD-1TB</option>
                                <option value="3">SSD-256GB</option>
                                <option value="4">HB-1TB</option>
                            </select>
                            <select name="computador-opcoes-so" id="computador-opcoes-mem">
                                <option value="1">Windows</option>
                                <option value="2">Linux</option>
                            </select>
                            <input type="submit" value="confirma-computador">
                        </div>
                    </form>
                </div>

                <div class="card-opt">
                    <form action="" class="formulario-notebook">
                        <img src="img/notebook.png" alt="Opção a selecionar: Notebook" class="notebook">
                        <h2 class="notebook-titulo">Notebook</h2>
                        <div class="opcoes-pecas-notebook">
                            <select name="notebook-opcoes-cpu" id="notebook-opcoes">
                                <option value="1">I3</option>
                                <option value="2">I5</option>
                                <option value="3">I7</option>
                                <option value="4">I9</option>
                            </select>
                            <select name="notebook-opcoes-mem" id="notebook-opcoes-mem">
                                <option value="1">4gb-ddr3</option>
                                <option value="2">4gb-ddr4</option>
                                <option value="3">8gb-ddr4</option>
                                <option value="4">12gb-ddr4</option>
                            </select>
                            <select name="notebook-opcoes-hd/ssd" id="notebook-opcoes">
                                <option value="1">HD-200GB</option>
                                <option value="2">SSD-1TB</option>
                                <option value="3">SSD-256GB</option>
                                <option value="4">HB-1TB</option>
                            </select>
                            <select name="notebook-opcoes-so" id="notebook-opcoes-mem">
                                <option value="1">Windows</option>
                                <option value="2">Linux</option>
                            </select>
                            <input type="submit" value="confirma-notebook">
                        </div>
                    </form>
                </div>


            </div>
        </main>
    </section>
</body>
</html>