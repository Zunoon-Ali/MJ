<div class="accordion-item">
    <h2 class="accordion-header" id="headingContactSlider">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContactSlider" aria-expanded="true">
            <i class="fa-solid fa-images me-2"></i>Banner Slider Section (3 Slides)
        </button>
    </h2>
    <div id="collapseContactSlider" class="accordion-collapse collapse show" data-bs-parent="#contactContentAccordion">
        <div class="accordion-body">
            <p class="text-muted">Manage all 3 banner slider slides. Each slide has a tagline, heading (H2), and paragraph.</p>

            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editSliderModal">
                    <i class="fa fa-edit me-1"></i>{{ $contact ? 'Edit Slider Content' : 'Add Slider Content' }}
                </button>
            </div>

            <!-- Display current data in table -->
            <div class="table-responsive mt-3" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead class="table-dark">
                        <tr>
                            <th style="white-space: nowrap;">Slide 1 Tagline</th>
                            <th style="white-space: nowrap;">Slide 1 H2</th>
                            <th style="white-space: nowrap;">Slide 1 P</th>
                            <th style="white-space: nowrap;">Slide 2 Tagline</th>
                            <th style="white-space: nowrap;">Slide 2 H2</th>
                            <th style="white-space: nowrap;">Slide 2 P</th>
                            <th style="white-space: nowrap;">Slide 3 Tagline</th>
                            <th style="white-space: nowrap;">Slide 3 H2</th>
                            <th style="white-space: nowrap;">Slide 3 P</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($contact)
                        <tr>
                            <td>{{ Str::limit($contact->slider1_tagline, 20) }}</td>
                            <td>{{ Str::limit($contact->slider1_h2, 20) }}</td>
                            <td>{{ Str::limit($contact->slider1_p, 30) }}</td>
                            <td>{{ Str::limit($contact->slider2_tagline, 20) }}</td>
                            <td>{{ Str::limit($contact->slider2_h2, 20) }}</td>
                            <td>{{ Str::limit($contact->slider2_p, 30) }}</td>
                            <td>{{ Str::limit($contact->slider3_tagline, 20) }}</td>
                            <td>{{ Str::limit($contact->slider3_h2, 20) }}</td>
                            <td>{{ Str::limit($contact->slider3_p, 30) }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editSliderModal">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <td colspan="10" class="text-center">No slider content found. Click "Add Slider Content" to create.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Slider Modal -->
@if($contact)
<div class="modal fade" id="editSliderModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{ route('contact-content.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-images me-2"></i>Edit Banner Slider Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @for($i = 1; $i <= 3; $i++)
                        <h6 class="mb-3 text-primary"><i class="fa-solid fa-image me-2"></i>Slide {{ $i }}</h6>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="form-label">Tagline</label>
                                <input type="text" name="slider{{$i}}_tagline" class="form-control" value="{{ $contact->{'slider'.$i.'_tagline'} }}" placeholder="e.g., Get In Touch">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Heading (H2)</label>
                                <input type="text" name="slider{{$i}}_h2" class="form-control" value="{{ $contact->{'slider'.$i.'_h2'} }}" placeholder="e.g., We're Here to Help You">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Paragraph</label>
                                <textarea name="slider{{$i}}_p" class="form-control" rows="2" placeholder="Slide description...">{{ $contact->{'slider'.$i.'_p'} }}</textarea>
                            </div>
                        </div>
                        @if($i < 3)
                            <hr>
                            @endif
                            @endfor
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save me-1"></i>Update Slider</button>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="editSliderModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{ route('contact-content.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-images me-2"></i>Add Banner Slider Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @for($i = 1; $i <= 3; $i++)
                        <h6 class="mb-3 text-primary"><i class="fa-solid fa-image me-2"></i>Slide {{ $i }}</h6>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <label class="form-label">Tagline</label>
                                <input type="text" name="slider{{$i}}_tagline" class="form-control" placeholder="e.g., Get In Touch">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Heading (H2)</label>
                                <input type="text" name="slider{{$i}}_h2" class="form-control" placeholder="e.g., We're Here to Help You">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Paragraph</label>
                                <textarea name="slider{{$i}}_p" class="form-control" rows="2" placeholder="Slide description..."></textarea>
                            </div>
                        </div>
                        @if($i < 3)
                            <hr>
                            @endif
                            @endfor
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save me-1"></i>Save Slider</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif