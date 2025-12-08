<div class="accordion-item">
    <h2 class="accordion-header" id="headingTattoo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTattoo" aria-expanded="false" aria-controls="collapseTattoo">
            Tattoo Section
        </button>
    </h2>
    <div id="collapseTattoo" class="accordion-collapse collapse" aria-labelledby="headingTattoo" data-bs-parent="#homeContentAccordion">
        <div class="accordion-body">
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTattooModal">
                    Add Tattoo Content
                </button>
            </div>

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap;">Paragraph 1</th>
                            <th style="white-space: nowrap;">Heading H2</th>
                            <th style="white-space: nowrap;">Paragraph 2</th>
                            <th style="white-space: nowrap;">Left Card Img</th>
                            <th style="white-space: nowrap;">Right Card Img</th>
                            <th style="white-space: nowrap;">Card 2 Text</th>
                            <th style="white-space: nowrap;">Card 1 H5</th>
                            <th style="white-space: nowrap;">Card 1 P</th>
                            <th style="white-space: nowrap;">Card 2 H5</th>
                            <th style="white-space: nowrap;">Card 2 P</th>
                            <th style="white-space: nowrap;">Card 3 H5</th>
                            <th style="white-space: nowrap;">Card 3 P</th>
                            <th style="white-space: nowrap;">Link</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($home)
                        <tr>
                            <td>{{Str::limit($home->home_tatto_cont_p1, 30)}}</td>
                            <td>{{ $home->home_tatto_cont_h2 }}</td>
                            <td>{{Str::limit($home->home_tatto_cont_p2, 30)}}</td>
                            <td>
                                @if($home->home_tatto_left_card2_img)
                                <img src="{{ asset('storage/' . $home->home_tatto_left_card2_img) }}" width="50" alt="Left Img">
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>
                                @if($home->home_tatto_right_card2_img)
                                <img src="{{ asset('storage/' . $home->home_tatto_right_card2_img) }}" width="50" alt="Right Img">
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>{{ $home->home_tatto_card2_text }}</td>
                            <td>{{ $home->home_tatto_cont_card1_h5 }}</td>
                            <td>{{Str::limit($home->home_tatto_cont_card1_p, 30)}}</td>
                            <td>{{ $home->home_tatto_cont_card2_h5 }}</td>
                            <td>{{Str::limit($home->home_tatto_cont_card2_p, 30)}}</td>
                            <td>{{ $home->home_tatto_cont_card3_h5 }}</td>
                            <td>{{Str::limit($home->home_tatto_cont_card3_p, 30)}}</td>
                            <td>{{ $home->home_tatto_cont_a }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editTattooModal">
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
                            <td colspan="14" class="text-center">No tattoo content found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Tattoo Modal -->
<div class="modal fade" id="addTattooModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('home-content.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Tattoo Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Left Card Image</label>
                            <input type="file" name="home_tatto_left_card2_img" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Right Card Image</label>
                            <input type="file" name="home_tatto_right_card2_img" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 Text</label>
                            <input type="text" name="home_tatto_card2_text" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph 1</label>
                            <textarea name="home_tatto_cont_p1" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Heading H2</label>
                            <input type="text" name="home_tatto_cont_h2" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph 2</label>
                            <textarea name="home_tatto_cont_p2" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 1 H5</label>
                            <input type="text" name="home_tatto_cont_card1_h5" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 1 P</label>
                            <input type="text" name="home_tatto_cont_card1_p" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 H5</label>
                            <input type="text" name="home_tatto_cont_card2_h5" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 P</label>
                            <input type="text" name="home_tatto_cont_card2_p" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 3 H5</label>
                            <input type="text" name="home_tatto_cont_card3_h5" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 3 P</label>
                            <input type="text" name="home_tatto_cont_card3_p" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Link (a)</label>
                            <input type="text" name="home_tatto_cont_a" class="form-control">
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

<!-- Edit Tattoo Modal -->
@if($home)
<div class="modal fade" id="editTattooModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('home-content.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Tattoo Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Left Card Image</label>
                            <input type="file" name="home_tatto_left_card2_img" class="form-control">
                            @if($home->home_tatto_left_card2_img)
                            <img src="{{ asset('storage/' . $home->home_tatto_left_card2_img) }}" width="50" class="mt-2">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Right Card Image</label>
                            <input type="file" name="home_tatto_right_card2_img" class="form-control">
                            @if($home->home_tatto_right_card2_img)
                            <img src="{{ asset('storage/' . $home->home_tatto_right_card2_img) }}" width="50" class="mt-2">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 Text</label>
                            <input type="text" name="home_tatto_card2_text" class="form-control" value="{{ $home->home_tatto_card2_text }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph 1</label>
                            <textarea name="home_tatto_cont_p1" class="form-control" rows="3">{{ $home->home_tatto_cont_p1 }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Heading H2</label>
                            <input type="text" name="home_tatto_cont_h2" class="form-control" value="{{ $home->home_tatto_cont_h2 }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph 2</label>
                            <textarea name="home_tatto_cont_p2" class="form-control" rows="3">{{ $home->home_tatto_cont_p2 }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 1 H5</label>
                            <input type="text" name="home_tatto_cont_card1_h5" class="form-control" value="{{ $home->home_tatto_cont_card1_h5 }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 1 P</label>
                            <input type="text" name="home_tatto_cont_card1_p" class="form-control" value="{{ $home->home_tatto_cont_card1_p }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 H5</label>
                            <input type="text" name="home_tatto_cont_card2_h5" class="form-control" value="{{ $home->home_tatto_cont_card2_h5 }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 P</label>
                            <input type="text" name="home_tatto_cont_card2_p" class="form-control" value="{{ $home->home_tatto_cont_card2_p }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 3 H5</label>
                            <input type="text" name="home_tatto_cont_card3_h5" class="form-control" value="{{ $home->home_tatto_cont_card3_h5 }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 3 P</label>
                            <input type="text" name="home_tatto_cont_card3_p" class="form-control" value="{{ $home->home_tatto_cont_card3_p }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Link (a)</label>
                            <input type="text" name="home_tatto_cont_a" class="form-control" value="{{ $home->home_tatto_cont_a }}">
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