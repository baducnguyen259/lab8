<!DOCTYPE html>
<html lang="vi">

  <head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container mt-4">
      <h1 class="mb-4">Danh sách sản phẩm ({{ $products->total() }} sản phẩm)</h1>

      <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge bg-primary mb-2">{{ $product->category->name ?? 'N/A' }}</span>
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="text-danger fw-bold fs-5">
                {{ number_format($product->price, 0, ',', '.') }} đ
              </p>
              <p class="text-muted small">{{ Str::limit($product->content, 80) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="text-muted small">👁 {{ number_format($product->views) }}</span>
                @if($product->is_active)
                <span class="badge bg-success">Đang bán</span>
                @else
                <span class="badge bg-secondary">Ẩn</span>
                @endif
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      {{-- Phân trang Bootstrap --}}
      <nav class="d-flex justify-content-center mt-4">
        <ul class="pagination">
          {{-- Nút Previous --}}
          @if ($products->onFirstPage())
          <li class="page-item disabled">
            <span class="page-link">«</span>
          </li>
          @else
          <li class="page-item">
            <a class="page-link" href="{{ $products->previousPageUrl() }}">«</a>
          </li>
          @endif

          {{-- Số trang --}}
          @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
          <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
          </li>
          @endforeach

          {{-- Nút Next --}}
          @if ($products->hasMorePages())
          <li class="page-item">
            <a class="page-link" href="{{ $products->nextPageUrl() }}">»</a>
          </li>
          @else
          <li class="page-item disabled">
            <span class="page-link">»</span>
          </li>
          @endif
        </ul>
      </nav>

    </div>
  </body>

</html>