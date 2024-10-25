<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<style>
    .list {
        display: flex;
        flex-direction: row;
        gap: 20px;
    }
    .item {
        display: flex;
        flex-direction: column;
        gap: 10px;
        border: 1px solid black;
        padding: 10px;
    }
    .form-input {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 20px;
    }
</style>
<body>
<div class="list">
    @foreach($orders as $product)
        <div class="item">
            <h3>{{ $product->list }}</h3>
            <p>Столик № {{ $product->number }}</p>
            <p>Статус {{ $product->status }}</p>
            <p>Время создания {{ $product-> created_at }}</p>
        </div>
    @endforeach
</div>
<div>
    <h1>Добавить заказ</h1>
    <form action="/order" method="POST">
        @csrf
        <div class="form-input">
            <label for="order-list">Блюда</label>
            <input type="text" name="order-list" id="order-list">
        </div>
        <div class="form-input">
            <label for="order-number">Номер столика</label>
            <input type="number" name="order-number" id="order-number">
        </div>
        <button type="submit">Добавить</button>


    </form>
    <a href="/history">История заказов</a>
</div>
</body>
</html>
