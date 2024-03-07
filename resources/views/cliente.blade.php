<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Pratica 01</title>
</head>
<body>
    <h1>Cliente</h1>
    <section id="listaClientes">
        <ul>
            <li>Cliente 1</li>
            <li>Cliente 2</li>
            <li>Cliente 3</li>
        </ul>
    </section>
    <section id="linkRotas">
        <a href="{{route('pedido')}}">Pedido</a>
        <a href="{{route ('produto')}}">Produto</a>
    </section>
</body>
</html>