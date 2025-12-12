<div class="accordion-item">
    <h2 class="accordion-header" id="headingContactSection">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContactSection" aria-expanded="false">
            <i class="fa-solid fa-address-card me-2"></i>Contact Form Section
        </button>
    </h2>
    <div id="collapseContactSection" class="accordion-collapse collapse" data-bs-parent="#contactContentAccordion">
        <div class="accordion-body">
            <p class="text-muted">Manage the contact form section content (tagline, heading, paragraph, and link).</p>

            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editContactSectionModal">
                    <i class="fa fa-edit me-1"></i>{{ $contact ? 'Edit Contact Section' : 'Add Contact Section' }}
                </button>
            </div>

            <!-- Display current data in table -->
            <div class="table-responsive mt-3" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead class="table-dark">
                        <tr>
                            <th style="white-space: nowrap;">Tagline</th>
                            <th style="white-space: nowrap;">Heading (H2)</th>
                            <th style="white-space: nowrap;">Paragraph</th>
                            <th style="white-space: nowrap;">Link Text</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($contact)
                        <tr>
                            <td>{{ Str::limit($contact->contact_tagline, 30) }}</td>
                            <td>{{ Str::limit($contact->contact_h2, 30) }}</td>
                            <td>{{ Str::limit($contact->contact_p, 50) }}</td>
                            <td>{{ Str::limit($contact->contact_link, 20) }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editContactSectionModal">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="5" class="text-center">No contact section content found. Click "Add Contact Section" to create.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Contact Section Modal -->
@if($contact)
<div class="modal fade" id="editContactSectionModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('contact-content.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-address-card me-2"></i>Edit Contact Section Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tagline</label>
                        <input type="text" name="contact_tagline" class="form-control" value="{{ $contact->contact_tagline }}" placeholder="e.g., Get in Touch with Us">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Heading (H2)</label>
                        <input type="text" name="contact_h2" class="form-control" value="{{ $contact->contact_h2 }}" placeholder="e.g., We'd Love to Hear From You">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Paragraph</label>
                        <textarea name="contact_p" class="form-control" rows="4" placeholder="Section description...">{{ $contact->contact_p }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link Text</label>
                        <input type="text" name="contact_link" class="form-control" value="{{ $contact->contact_link }}" placeholder="e.g., Learn More">
                        <small class="text-muted">The text displayed on the "Learn More" button.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save me-1"></i>Update Contact Section</button>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="editContactSectionModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('contact-content.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-address-card me-2"></i>Add Contact Section Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tagline</label>
                        <input type="text" name="contact_tagline" class="form-control" placeholder="e.g., Get in Touch with Us">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Heading (H2)</label>
                        <input type="text" name="contact_h2" class="form-control" placeholder="e.g., We'd Love to Hear From You">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Paragraph</label>
                        <textarea name="contact_p" class="form-control" rows="4" placeholder="Section description..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link Text</label>
                        <input type="text" name="contact_link" class="form-control" placeholder="e.g., Learn More">
                        <small class="text-muted">The text displayed on the "Learn More" button.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save me-1"></i>Save Contact Section</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif