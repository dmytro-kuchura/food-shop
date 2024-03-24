@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Список замовлень</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered dataTable">
                                        <thead>
                                        <tr role="row">
                                            <th>
                                                Номер замовлення
                                            </th>
                                            <th>
                                                Покупець
                                            </th>
                                            <th>
                                                Кіл-ть товарів
                                            </th>
                                            <th>
                                                Спосіб доставки
                                            </th>
                                            <th>
                                                Спосіб оплати
                                            </th>
                                            <th>
                                                Сторено
                                            </th>
                                            <th>
                                                Сума
                                            </th>
                                            <th>
                                                Статус
                                            </th>
                                            <th>
                                                Дії
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $obj)
                                            <tr class="odd">
                                                <td>№ {{ $obj->id }}</td>
                                                <td>{{ $obj->first_name . ' ' . $obj->last_name }}</td>
                                                <td>{{ count($obj->items) }}</td>
                                                <td>{{ $obj->delivery }}</td>
                                                <td>{{ $obj->payment }}</td>
                                                <td>{{ $obj->getUkrainianDate() }}</td>
                                                <td>₴ {{ $obj->getOrderTotal() }}</td>
                                                <td>
                                                    @widget('adminOrderStatus', ['status' => $obj->status])
                                                </td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div>
                                        Відобаржено {{ $orders->onEachSide }} з {{ $orders->total() }} записів
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        @if ($orders->hasPages())
                                            <ul class="pagination">
                                                @if ($orders->onFirstPage())
                                                    <li class="page-item previous disabled">
                                                        <a href="{{ str_replace('?page=1', '', $orders->previousPageUrl()) }}"
                                                           class="page-link">Попередня</a>
                                                    </li>
                                                @else
                                                    <li class="page-item previous">
                                                        <a href="{{ str_replace('?page=1', '', $orders->previousPageUrl()) }}"
                                                           class="page-link">Попередня</a>
                                                    </li>
                                                @endif
                                                @foreach ($orders->links()->elements as $element)
                                                    @if (is_array($element))
                                                        @foreach ($element as $page => $url)
                                                            @if ($page == $orders->currentPage())
                                                                <li class="page-item active">
                                                                    <a href="javascript:void(0)"
                                                                       class="page-link">{{ $page }}</a>
                                                                </li>
                                                            @else
                                                                <li class="page-item">
                                                                    <a href="{{str_replace(['?page=1', '&page=1'], ['', ''], $url)}}"
                                                                       class="page-link">{{ $page }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                                @if ($orders->hasMorePages())
                                                    <li class="page-item next">
                                                        <a href="{{ $orders->nextPageUrl() }}"
                                                           class="page-link">Наступна</a>
                                                    </li>
                                                @else
                                                    <li class="page-item next disabled">
                                                        <a href="{{ $orders->nextPageUrl() }}"
                                                           class="page-link">Наступна</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
