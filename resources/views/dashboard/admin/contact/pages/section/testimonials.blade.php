<div class="accordion-item">
    <h2 class="accordion-header" id="headingContactTestimonials">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContactTestimonials" aria-expanded="false">
            <i class="fa-solid fa-quote-left me-2"></i>Testimonials Section
        </button>
    </h2>
    <div id="collapseContactTestimonials" class="accordion-collapse collapse" data-bs-parent="#contactContentAccordion">
        <div class="accordion-body">
            <p class="text-muted">Manage the testimonials section heading and description.</p>

            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTestimonialsModal">
                    <i class="fa fa-edit me-1"></i>{{ $contact ? 'Edit Testimonials Section' : 'Add Testimonials Section' }}
                </button>
            </div>

            <!-- Display current data in table -->
            <div class="table-responsive mt-3" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead class="table-dark">
                        <tr>
                            <th style="white-space: nowrap;">Heading (H2)</th>
                            <th style="white-space: nowrap;">Paragraph</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($contact)
                        <tr>
                            <td>{{ Str::limit($contact->testi_h2, 40) }}</td>
                            <td>{{ Str::limit($contact->testi_p, 80) }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editTestimonialsModal">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="3" class="text-center">No testimonials section content found. Click "Add Testimonials Section" to create.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Testimonials Modal -->
@if($contact)
<div class="modal fade" id="editTestimonialsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('contact-content.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-quote-left me-2"></i>Edit Testimonials Section Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Heading (H2)</label>
                        <input type="text" name="testi_h2" class="form-control" value="{{ $contact->testi_h2 }}" placeholder="e.g., What People Say">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Paragraph</label>
                        <textarea name="testi_p" class="form-control" rows="4" placeholder="Section description...">{{ $contact->testi_p }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save me-1"></i>Update Testimonials Section</button>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="editTestimonialsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('contact-content.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-quote-left me-2"></i>Add Testimonials Section Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Heading (H2)</label>
                        <input type="text" name="testi_h2" class="form-control" placeholder="e.g., What People Say">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Paragraph</label>
                        <textarea name="testi_p" class="form-control" rows="4" placeholder="Section description..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save me-1"></i>Save Testimonials Section</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif