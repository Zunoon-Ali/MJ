<div class="accordion-item">
    <h2 class="accordion-header" id="headingAboutSection">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAboutSection">
            About Section Content
        </button>
    </h2>
    <div id="collapseAboutSection" class="accordion-collapse collapse" data-bs-parent="#aboutContentAccordion">
        <div class="accordion-body">
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAboutModal">
                    {{ $about ? 'Edit About Section' : 'Add About Section' }}
                </button>
            </div>

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap;">Tagline</th>
                            <th style="white-space: nowrap;">H2</th>
                            <th style="white-space: nowrap;">Paragraph</th>
                            <th style="white-space: nowrap;">Image</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($about)
                        <tr>
                            <td>{{ Str::limit($about->about_tagline, 20) }}</td>
                            <td>{{ Str::limit($about->about_h2, 20) }}</td>
                            <td>{{ Str::limit($about->about_p, 30) }}</td>
                            <td>
                                @if($about->about_img)
                                <img src="{{ asset('storage/' . $about->about_img) }}" width="50">
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editAboutModal">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="5" class="text-center">No about content found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal --
>
@if($about)
<div class="modal fade" id="editAboutModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('about-content.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit About Section</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tagline</label>
                        <input type="text" name="about_tagline" class="form-control" value="{{ $about->about_tagline }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Heading (H2)</label>
                        <input type="text" name="about_h2" class="form-control" value="{{ $about->about_h2 }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Paragraph</label>
                        <textarea name="about_p" class="form-control" rows="4">{{ $about->about_p }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" name="about_link" class="form-control" value="{{ $about->about_link }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="about_img" class="form-control">
                        @if($about->about_img)
                        <img src="{{ asset('storage/' . $about->about_img) }}" width="100" class="mt-2">
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="editAboutModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('about-content.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add About Section</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tagline</label>
                        <input type="text" name="about_tagline" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Heading (H2)</label>
                        <input type="text" name="about_h2" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Paragraph</label>
                        <textarea name="about_p" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" name="about_link" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="about_img" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif