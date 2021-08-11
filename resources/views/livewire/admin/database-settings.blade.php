<div>
    <div class="card" x-data="{ isUploading: false, progress: 0 }"
         x-on:livewire-upload-start="isUploading = true"
         x-on:livewire-upload-finish="isUploading = false"
         x-on:livewire-upload-error="isUploading = false"
         x-on:livewire-upload-progress="progress = $event.detail.progress">
        <div class="card-header">
            <h3>Add Products</h3>
        </div>
        @if(!$this->is_active_progress)
            <div class="card-body" wire:loading.remove>
                <form wire:submit.prevent="upload">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="{{ $errors->has('file') ? ' has-error' : '' }}">
                                        <input type="file" id="file" wire:model="file">
                                        @if ($errors->has('file'))
                                            <span class="help-block text-danger d-block">
                                            <strong>{{ $errors->first('file') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success mb-1" type="submit" value="1" wire:model="upload">
                                        <i class="fa fa-cloud-upload"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card bg-secondary d-none">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-info" wire:click="deleteProductImageGarbage">
                                    Delete product images garbage
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div wire:loading {{--wire:target="upload"--}}>
                            <span class="spinner spinner-large spinner-blue spinner-slow"></span>
                        </div>
                    </div>
                    <!-- Progress Bar -->
                    <div class="col-md-12">
                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body" wire:poll.2000>
                <div class="row">
                    <div class="col-md-12">
                        <div class="progress" style="height:20px">
                            <div class="progress-bar"
                                 style="width:{{ $percent_done }}%;height:20px">{{ round($percent_done,2) }}%</div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <h4>
                            <strong>{{ $progress->rows_imported }}</strong>
                            out of
                            <strong>{{ $progress->total_rows }}</strong>
                        </h4>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
