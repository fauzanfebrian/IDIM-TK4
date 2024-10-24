<div class="d-flex align-items-center justify-content-center gap-1">
{{--    <a class="btn btn-primary text-white btn-sm" href="{{ route("hak-akses.show", [$IdAkses]) }}">--}}
{{--        <i class="bi bi-eye"></i>--}}
{{--    </a>--}}
    <a class="btn btn-warning text-white btn-sm" href="{{ route("hak-akses.edit", [$IdAkses]) }}">
        <i class="bi bi-pencil"></i>
    </a>
    <div class="position-relative">
        <button class="btn btn-sm btn-danger text-white" disabled>
            <i class="bi bi-trash"></i>
        </button>
        <a href="{{ route("hak-akses.destroy", [$IdAkses]) }}" data-confirm-delete="true"
           class="stretched-link"></a>
    </div>
</div>
