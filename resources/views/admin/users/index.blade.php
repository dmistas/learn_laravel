@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Is Admin</th>
                    <th scope="col">Добавить роль Admin</th>
                    <th scope="col">Убрать роль Admin</th>
                    <th scope="col">Удалить пользователя</th>
                </tr>
                </thead>
                <tbody>
                @forelse( $users as $user_item)
                    <tr>
                        <th scope="row">{{ $user_item->id }}</th>
                        <td>{{ $user_item->name }}</td>
                        <td>{{ $user_item->email }}</td>
                        <td>
                            @if($user_item->is_admin)
                                да
                            @endif
                        </td>
                        <td>
                            @if(!$user_item->is_admin)
                                <a href="{{route('change_user_role', ['id'=>$user_item->id])}}">Добавить</a>
                            @endif
                        </td>
                        <td>
                            @if($user_item->is_admin)
                                <a href="{{route('change_user_role', ['id'=>$user_item->id])}}">Убрать</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('delete_user', ['id'=>$user_item->id])}}">
                                <span class="btn btn-danger">Удалить</span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <h3>Нет пользователей</h3>
                @endforelse

                </tbody>
            </table>


            <!-- Pager -->
            <div class="clearfix">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@stop

