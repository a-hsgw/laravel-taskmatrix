<div class="modal fade" id="addTaskModal{{ $task->id }}" tabindex="-1" aria-labelledby="addTaskModalLabel{{ $task->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskModalLabel{{ $task->id }}">タスクの追加</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
            </div>
            <form action="{{ route('tasks.tasks.store', $task) }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="text" class="form-control" name="content">
                    <div class="d-flex flex-wrap">
                      @foreach ($tags as $tag)                            
                          <label>  
                              <div class="d-flex align-items-center mt-3 me-3">
                                  <input type="checkbox" name="tag_ids[]" value="{{ $tag->id }}">                            
                                  <span class="badge bg-secondary ms-1">{{ $tag->name }}</span>
                              </div>                                                   
                          </label>                                                       
                      @endforeach    
                  </div>                                              
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>
  </div>