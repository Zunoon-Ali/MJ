<div class="accordion-item">
    <h2 class="accordion-header" id="headingTestimonials">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTestimonials" aria-expanded="false" aria-controls="collapseTestimonials">
            Testimonials Section
        </button>
    </h2>
    <div id="collapseTestimonials" class="accordion-collapse collapse" aria-labelledby="headingTestimonials" data-bs-parent="#homeContentAccordion">
        <div class="accordion-body">
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTestimonialsModal">
                    Add Testimonials Content
                </button>
            </div>

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap;">Heading H2</th>
                            <th style="white-space: nowrap;">Paragraph</th>
                            <th style="white-space: nowrap;">Card H6</th>
                            <th style="white-space: nowrap;">Card P</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($home)
                        <tr>
                            <td>{{ $home->home_testimonials_h2 }}</td>
                            <td>{{Str::limit($home->home_testimonials_p, 50)}}</td>
                            <td>{{ $home->home_testimonials_card_h6 }}</td>
                            <td>{{Str::limit($home->home_testimonials_card_p, 50)}}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editTestimonialsModal">
                                    Edit
                                </button>
                                <form action="{{ route('home-content.destroy', $home->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="5" class="text-center">No testimonials content found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Testimonials Modal -->
<div class="modal fade" id="addTestimonialsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('home-content.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Testimonials Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Heading H2</label>
                            <input type="text" name="home_testimonials_h2" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph</label>
                            <textarea name="home_testimonials_p" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card H6</label>
                            <input type="text" name="home_testimonials_card_h6" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Card Paragraph</label>
                            <textarea name="home_testimonials_card_p" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card Image</label>
                            <input type="file" name="home_testimonials_card_img" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Testimonials Modal -->
@if($home)
<div class="modal fade" id="editTestimonialsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('home-content.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Testimonials Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Heading H2</label>
                            <input type="text" name="home_testimonials_h2" class="form-control" value="{{ $home->home_testimonials_h2 }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph</label>
                            <textarea name="home_testimonials_p" class="form-control" rows="3">{{ $home->home_testimonials_p }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card H6</label>
                            <input type="text" name="home_testimonials_card_h6" class="form-control" value="{{ $home->home_testimonials_card_h6 }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Card Paragraph</label>
                            <textarea name="home_testimonials_card_p" class="form-control" rows="3">{{ $home->home_testimonials_card_p }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card Image</label>
                            <input type="file" name="home_testimonials_card_img" class="form-control">
                            @if($home->home_testimonials_card_img)
                            <img src="{{ asset('storage/' . $home->home_testimonials_card_img) }}" width="50" class="mt-2">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif