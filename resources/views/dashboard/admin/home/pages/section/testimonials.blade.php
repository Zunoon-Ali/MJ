<div class="accordion-item">
    <h2 class="accordion-header" id="headingTestimonialsHeader">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTestimonialsHeader" aria-expanded="false" aria-controls="collapseTestimonialsHeader">
            Testimonials Section Header
        </button>
    </h2>
    <div id="collapseTestimonialsHeader" class="accordion-collapse collapse" aria-labelledby="headingTestimonialsHeader" data-bs-parent="#homeContentAccordion">
        <div class="accordion-body">
            <p class="text-muted">Manage the heading and paragraph for the testimonials section.</p>

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap;">Heading H2</th>
                            <th style="white-space: nowrap;">Paragraph</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($home)
                        <tr>
                            <td>{{ $home->home_testimonials_h2 }}</td>
                            <td>{{Str::limit($home->home_testimonials_p, 50)}}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editTestimonialsHeaderModal">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="3" class="text-center">No testimonials header found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Header Modal -->
@if($home)
<div class="modal fade" id="editTestimonialsHeaderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('home-content.update', $home->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Testimonials Header</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Heading H2</label>
                            <input type="text" name="home_testimonials_h2" class="form-control" value="{{ $home->home_testimonials_h2 }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph</label>
                            <textarea name="home_testimonials_p" class="form-control" rows="3">{{ $home->home_testimonials_p }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Header</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

<!-- Testimonial Cards Section -->
<div class="accordion-item">
    <h2 class="accordion-header" id="headingTestimonialCards">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTestimonialCards" aria-expanded="false" aria-controls="collapseTestimonialCards">
            Testimonial Cards
        </button>
    </h2>
    <div id="collapseTestimonialCards" class="accordion-collapse collapse" aria-labelledby="headingTestimonialCards" data-bs-parent="#homeContentAccordion">
        <div class="accordion-body">
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCardModal">
                    Add Testimonial Card
                </button>
            </div>

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap;">Image</th>
                            <th style="white-space: nowrap;">Name</th>
                            <th style="white-space: nowrap;">Testimonial</th>
                            <th style="white-space: nowrap;">Order</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $testimonialCards = \App\Models\TestimonialCard::all();
                        @endphp
                        @forelse($testimonialCards as $card)
                        <tr>
                            <td>
                                @if($card->image)
                                <img src="{{ asset('storage/' . $card->image) }}" width="50" alt="{{ $card->name }}">
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>{{ $card->name }}</td>
                            <td>{{ Str::limit($card->testimonial, 50) }}</td>
                            <td>{{ $card->order }}</td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editCardModal{{ $card->id }}">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                                <form action="{{ route('testimonial-cards.destroy', $card->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Del</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Edit Card Modal for this card -->
                        <div class="modal fade" id="editCardModal{{ $card->id }}" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="{{ route('testimonial-cards.update', $card->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Testimonial Card</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ $card->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Testimonial</label>
                                                <textarea name="testimonial" class="form-control" rows="4" required>{{ $card->testimonial }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                <input type="file" name="image" class="form-control">
                                                @if($card->image)
                                                <img src="{{ asset('storage/' . $card->image) }}" width="100" class="mt-2">
                                                @endif
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Order</label>
                                                <input type="number" name="order" class="form-control" value="{{ $card->order }}">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" name="is_active" class="form-check-input" id="is_active_edit{{ $card->id }}" {{ $card->is_active ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active_edit{{ $card->id }}">Active</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Card</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No testimonial cards found. Add one!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Card Modal -->
<div class="modal fade" id="addCardModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('testimonial-cards.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Testimonial Card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Testimonial</label>
                        <textarea name="testimonial" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Order</label>
                        <input type="number" name="order" class="form-control" value="0">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_active" class="form-check-input" id="is_active_add" checked>
                        <label class="form-check-label" for="is_active_add">Active</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Card</button>
                </div>
            </form>
        </div>
    </div>
</div>