@extends('Layouts.main')

@section('title-block')
    Запросы
@endsection
@section('content')

    @if(session()->has('success'))
        <div style="color: green"><strong>{{ session()->get('success') }}</strong></div>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Имя</th>
            <th scope="col">Телефон</th>
            <th scope="col">e-mail</th>
            <th scope="col">Текст</th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr class="table-active">
                <td>{{ $order->name }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->text }}</td>
            </tr>
        @empty
            <tr class="table-active">
                <td><h3>No orders</h3></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="clearfix">
        {{ $orders->links() }}
    </div>
    <button class="btn btn-block"><a href="/orders/create">Добавить заказ</a></button>
@endsection

