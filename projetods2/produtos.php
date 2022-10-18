
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/nav.png">
    <title>Tecno Power</title>
</head>

<body>

    <div class="area"></div>
    <?php include 'navbar.html' ?>
    <div class='inicio'>

        <div class="tabela position-absolute top-0 start-50 translate-middle-x">


            <nav class="navbar bg-light border rounded">
                <form action="produtos.php" method='GET' class="container-fluid justify-content-start">
                    <div class="col-auto">
                        <button style="width:100px;" id="novo" type="button" class="botao btn " data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            Adicionar
                        </button>
                    </div>
                    <div class="ms-2 col-auto">
                        <input style="width:125px;" class="form-control" name="buscacod" type="text" placeholder="Buscar código">
                    </div>
                    <div class="ms-2 col-auto">
                        <input class="buscar btn" name='buscar1' type="submit" value='Buscar'>
                    </div>
                    <div class="ms-2 col-auto">
                        <input style="width:125px;" class="form-control" name="busca" type="text" placeholder="Buscar nome">
                    </div>
                    <div class="ms-2 col-auto">
                        <input class="buscar btn" name='buscar2' type="submit" value='Buscar'>
                    </div>
                    <div class="ms-2 col-auto">
                        <select style="width:125px;" class="form-select" name="buscacat">
                            <option value="">Categoria</option>
                            
                                <option value=""></option>
                            
                        </select>
                    </div>
                    <div class="ms-2 col-auto">
                        <input class="buscar btn" name='buscar3' type="submit" value='Buscar'>
                    </div>
                    <div class="ms-2 col-auto">
                        <input style="width:70px;" class="form-control" name="per" type="number" placeholder="De">
                    </div>
                    <div class="ms-2 col-auto">
                        <input style="width:70px;" class="form-control" name="per2" type="number" placeholder="Até">
                    </div>
                    <div class="ms-2 col-auto">
                        <input class="buscar btn" name='buscar5' type="submit" value='Buscar'>
                    </div>
                </form>
            </nav>
            <table class="table align-middle">
                <thead>
                    <tr class='text-center'>
                        <th scope="col">Código</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Preço de custo</th>
                        <th scope="col">Preço de venda</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        
                    <tr>
                </tfoot>
            </table>
        </div>

    </div>


    <!-- MODAL NOVO PRODUTO -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" />

                    <div class="mb-3">
                        <label for="cod" class="form-label">Código do Produto</label>
                        <input type="text" class="form-control" id="cod" placeholder="Código do Produto">
                    </div>
                    <div class="mb-3">
                        <label for="nomeprod" class="form-label">Nome do Produto</label>
                        <input type="text" class="form-control" id="nomeprod" placeholder="Nome do Produto">
                    </div>
                    <div class="mb-3">
                        <label for="catprod" class="form-label">Categoria</label>
                        <select class="form-control" name="catprod" id="catprod">
                            <option value=''>Selecione uma categoria</option>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="estoque" class="form-label">Quantidade em Estoque</label>
                        <input type="number" class="form-control" id="estoque" placeholder="Quantidade em Estoque">
                    </div>
                    <div class="mb-3">
                        <label for="valorprod" class="form-label">Preço de custo</label>
                        <input type="number" step=0.01 class="form-control" id="valorprod" placeholder="Valor do Produto">
                    </div>
                    <div class="mb-3">
                        <label for="valorv" class="form-label">Preço de venda</label>
                        <input type="number" step=0.01 class="form-control" id="valorv" placeholder="Valor do Produto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button id="salvar1" type="button" class="btn btn-success">Salvar</button>
                </div>

            </div>
        </div>
    </div>

    
</body>

</html>