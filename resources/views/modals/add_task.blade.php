{{-- <div class="modal fade" id="addTaskModal{{ $tasks->id }}" tabindex="-1" aria-labelledby="addTaskModalLabel{{ $tasks->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskModalLabel{{ $tasks->id }}">タスクの追加</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
            </div>
            <form action="{{ route('tasks.tasks.store', $task) }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="text" class="form-control" name="content">
                    <div class="d-flex flex-wrap">
                      @foreach ($urgensies as $urgency)                            
                          <label>  
                              <div class="d-flex align-items-center mt-3 me-3">
                                  <input type="checkbox" name="tag_ids[]" value="{{ $urgency->id }}">                            
                                  <span class="badge bg-secondary ms-1">{{ $urgency->name }}</span>
                              </div>                                                   
                          </label>                                                       
                      @endforeach  
                      @foreach ($importances as $importance)                            
                      <label>  
                          <div class="d-flex align-items-center mt-3 me-3">
                              <input type="checkbox" name="tag_ids[]" value="{{ $importance->id }}">                            
                              <span class="badge bg-secondary ms-1">{{ $importance->name }}</span>
                          </div>                                                   
                      </label>                                                       
                      @endforeach
                      <label>保留</label>
                        <div class="d-flex align-items-center mt-3 me-3">
                            <input type="checkbox" name="tag_ids[]" value="{{ $importance->id }}">                            
                            <span class="badge bg-secondary ms-1">{{ $importance->name }}</span>
                        </div>                                                   
                    </label> 
                  </div>                                              
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>
  </div>
 --}}

  <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGoalTaskLabel">タスクの追加</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
            </div>
            <form action="{{ route('tasks.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="text" class="form-control" name="task">
                </div>
                <div class="d-flex flex-wrap">

                <label for="impotance">重要度</label>
            <select name="importance_id" class="form-control" id="importance_id">
                @foreach ($importances as $importance)
                    <option value="{{ $importance->id }}">{{ $importance->name }}</option>
                @endforeach
            </select>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </form>
        </div>
    </div>
</div>