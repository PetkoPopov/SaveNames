@extends('layouts.app')
<body>
    
    <form action='/worker/create' >
        <p>
        <div> <small>с приоритет</small>
        Нова Дейност :<input type="text" name="activity"/>
        </div>
    </p><!-- comment -->
    @if(isset($allActivity))

    Избери дейност:<select name="activitySelect">
            @foreach($allActivity as $actV)
            <option value="{{$actV->activity}}">
               {{$actV->activity}} 
                
            </option>
            @endforeach
            
        </select>
        @endif
        Дата :<input type="date" name="date"/><!-- comment -->
        Място :<input type="text" name='location' />
        <p>
        Бележка :<input  type="text" name="expl" />
        Платено :<input type="number" name="wage"/>
        </p>
        Име :<select name="user_id">
            @foreach($allUsers as $user)
            <option value="{{$user->id}}">
            {{$user->name}}    
            </option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-light" />
            
    </form>
</body>