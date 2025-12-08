<div class="accordion-item">
    <h2 class="accordion-header" id="headingStore">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStore" aria-expanded="false" aria-controls="collapseStore">
            Store Section
        </button>
    </h2>
    <div id="collapseStore" class="accordion-collapse collapse" aria-labelledby="headingStore" data-bs-parent="#homeContentAccordion">
        <div class="accordion-body">
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStoreModal">
                    Add Store Content
                </button>
            </div>

            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-bordered table-sm" style="white-space: nowrap;">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap;">Heading H2</th>
                            <th style="white-space: nowrap;">Paragraph 1</th>
                            <th style="white-space: nowrap;">Paragraph 2</th>
                            <th style="white-space: nowrap;">Link</th>
                            <th style="white-space: nowrap;">Card 1 Image</th>
                            <th style="white-space: nowrap;">Card 1 Text</th>
                            <th style="white-space: nowrap;">Card 2 Image</th>
                            <th style="white-space: nowrap;">Card 2 Text</th>
                            <th style="white-space: nowrap;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($home)
                        <tr>
                            <td>{{ $home->home_store_h2 }}</td>
                            <td>{{Str::limit($home->home_store_p1, 50)}}</td>
                            <td>{{Str::limit($home->home_store_p2, 50)}}</td>
                            <td>{{ $home->home_store_a }}</td>
                            <td>
                                @if($home->home_store_card1_img)
                                <img src="{{ asset('storage/' . $home->home_store_card1_img) }}" width="50" alt="Card 1 Img">
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>{{ $home->home_store_card1_text }}</td>
                            <td>
                                @if($home->home_store_card2_img)
                                <img src="{{ asset('storage/' . $home->home_store_card2_img) }}" width="50" alt="Card 2 Img">
                                @else
                                <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>{{ $home->home_store_card2_text }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editStoreModal">
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
                            <td colspan="9" class="text-center">No store content found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Store Modal -->
<div class="modal fade" id="addStoreModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('home-content.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Store Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph 1</label>
                            <textarea name="home_store_p1" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Heading H2</label>
                            <input type="text" name="home_store_h2" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph 2</label>
                            <textarea name="home_store_p2" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Link (a)</label>
                            <input type="text" name="home_store_a" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 1 Image</label>
                            <input type="file" name="home_store_card1_img" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 1 Text</label>
                            <input type="text" name="home_store_card1_text" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 Image</label>
                            <input type="file" name="home_store_card2_img" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 Text</label>
                            <input type="text" name="home_store_card2_text" class="form-control">
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

<!-- Edit Store Modal -->
@if($home)
<div class="modal fade" id="editStoreModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('home-content.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Store Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph 1</label>
                            <textarea name="home_store_p1" class="form-control" rows="3">{{ $home->home_store_p1 }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Heading H2</label>
                            <input type="text" name="home_store_h2" class="form-control" value="{{ $home->home_store_h2 }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Paragraph 2</label>
                            <textarea name="home_store_p2" class="form-control" rows="3">{{ $home->home_store_p2 }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Link (a)</label>
                            <input type="text" name="home_store_a" class="form-control" value="{{ $home->home_store_a }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 1 Image</label>
                            <input type="file" name="home_store_card1_img" class="form-control">
                            @if($home->home_store_card1_img)
                            <img src="{{ asset('storage/' . $home->home_store_card1_img) }}" width="50" class="mt-2">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 1 Text</label>
                            <input type="text" name="home_store_card1_text" class="form-control" value="{{ $home->home_store_card1_text }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 Image</label>
                            <input type="file" name="home_store_card2_img" class="form-control">
                            @if($home->home_store_card2_img)
                            <img src="{{ asset('storage/' . $home->home_store_card2_img) }}" width="50" class="mt-2">
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Card 2 Text</label>
                            <input type="text" name="home_store_card2_text" class="form-control" value="{{ $home->home_store_card2_text }}">
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