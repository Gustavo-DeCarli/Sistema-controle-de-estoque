<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js" integrity="sha256-cHVO4dqZfamRhWD7s4iXyaXWVK10odD+qp4xidFzqTI=" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/nav.png">
    <title>Tecno Power</title>
</head>

<body>
    <?php include 'navbar.html' ?>
    <div class='inicio'>
        <div class='mx-auto fundo'>
            <div class="painel">
                <h1 class="titulo">Estatísticas</h1>
                <div class='row'>
                    <div class="col grafchart">
                        <h5>Mês Anterios X Mês Atual</h5>
                        <canvas id="myChart">
                            <script>
                                let ctx = document.getElementById('myChart').getContext('2d');
                                let chart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Vendas mês anterior', 'Vendas mês atual'],
                                        datasets: [{
                                            label: 'Nº de chamados',
                                            data: [2, 3],
                                            backgroundColor: [
                                                'rgba(255,90,0, 0.9)',
                                                'rgba(73, 184, 0, 1)',
                                            ],
                                            borderColor: [
                                                'rgba(0,0,0, 1)'
                                            ],
                                            borderWidth: 2.5
                                        }]
                                    },
                                    options: {
                                        elements: {
                                            line: {
                                                tension: 0
                                            }
                                        }
                                    }
                                });
                            </script>
                        </canvas>
                    </div>

                    <div class="col grafchart">
                        <h5>Mês Anterios X Mês Atual</h5>
                        <canvas id="myChart2">
                            <script>
                                let ctx2 = document.getElementById('myChart2').getContext('2d');
                                let chart2 = new Chart(ctx2, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Vendas mês anterior', 'Vendas mês atual'],
                                        datasets: [{
                                            label: 'Nº de chamados',
                                            data: [2, 3],
                                            backgroundColor: [
                                                'rgba(255,90,0, 0.9)',
                                                'rgba(73, 184, 0, 1)',
                                            ],
                                            borderColor: [
                                                'rgba(0,0,0, 1)'
                                            ],
                                            borderWidth: 2.5
                                        }]
                                    },
                                    options: {
                                        elements: {
                                            line: {
                                                tension: 0
                                            }
                                        }
                                    }
                                });
                            </script>
                        </canvas>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>