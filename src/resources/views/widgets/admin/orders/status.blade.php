@if ($status === 'CREATED')
    <span class="badge badge-primary">Новий</span>
@endif

@if ($status === 'IN_WORK')
    <span class="badge badge-warning">В обробці</span>
@endif

@if ($status === 'COMPLETED')
    <span class="badge badge-success">Виконано</span>
@endif

@if ($status === 'REJECTED')
    <span class="badge badge-danger">Відхилено</span
@endif

@if ($status === 'REFUNDED')
    <span class="badge badge-dark">Повернуто</span>
@endif
