@aware(['page'])
<div class="accordion" id="acc">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headoro{{Str::slug($title)}}">
            <button
                class="accordion-button fs-4 fw-bold"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse{{Str::slug($title)}}"
                aria-expanded="true"
                aria-controls="collapse{{Str::slug($title)}}"
            >
               {{$title}}
            </button>
        </h2>
        <div
            id="collapse{{Str::slug($title)}}"
            class="accordion-collapse collapse"
            aria-labelledby="headoro{{Str::slug($title)}}"
            data-bs-parent="#acc"
        >
            <div class="accordion-body rich-im-res">
                {!! $text !!}
            </div>
        </div>
    </div>
</div>
