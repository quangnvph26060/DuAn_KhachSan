<?php

 function showError($errors,$name){
    if($errors->has($name)){
        return'
        <div class="alert alert-danger" role="alert">
           <strong> '.$errors->first($name).'</strong>
        </div>
        ';
    }
 }


function uploadFile($nameFolder,$file){
    $fileName = time().''.$file->getClientOriginalName();

    return $file->storeAs($nameFolder,$fileName,'public');

}
