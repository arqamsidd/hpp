<div class="divider mb-1 mt-1" style="user-select: auto;"></div>
    <div class="card-title">
        <div class="row">
        <div class="col s12 m6 l10">
            <h4 class="card-title">Seo Meta Data</h4>
        </div>
        <div class="col s12 m6 l2">
        </div>
        </div>
    </div>
    <input name="meta_id" type="hidden" value="<?= !empty($meta_record['id']) ? $meta_record['id'] : '' ?>" >
    <div class="input-field col s12">
        <label for="cemail0">Meta Title</label>
        <input class="validate" id="uname0" name="meta_title" type="text" placeholder="Enter Meta Title" value="<?= !empty($meta_record['meta_title']) ? $meta_record['meta_title'] : '' ?>" >
    </div>
    <div class="input-field col s12">
        <label for="cemail0">Meta Keyword</label>
        <input class="validate" id="uname0" name="meta_keywords" type="text" placeholder="Enter the keywords with comma separated like boxes,big boxes" value="<?= !empty($meta_record['meta_keywords']) ? $meta_record['meta_keywords'] : '' ?>" >
    </div>
    
    <div class="input-field col s12">
        <label for="cemail0">Meta Description</label>
        <textarea class="materialize-textarea validate" id="ccomment0" name="meta_description" placeholder="Title" style="height: 100px;"><?= !empty($meta_record['meta_description']) ? $meta_record['meta_description'] : '' ?></textarea>
    </div>
    
        <div class="input-field col s12">
        <label for="cemail0">Index / No Index </label>
        <input class="validate" id="uname0" name="page_indexing" type="text" placeholder="Please Enter Index or Noindex for This spicific Page" value="<?= !empty($meta_record['page_indexing']) ? $meta_record['page_indexing'] : '' ?>" >
        </div>
    
        <div class="input-field col s12">
        <label for="cemail0">Schema Scripts </label>
          <textarea  rows="50" style="height: 15rem;" name="schema_script">
              {!! !empty($record[0]->schema_script) ? $record[0]->schema_script : ''; !!}
          </textarea>
        <!--<input class="validate" id="uname0" id="ccomment0" name="schema_script" placeholder="Schema Scripts" type="text" value=" {!! !empty($record[0]->schema_script) ? $record[0]->schema_script : ''; !!}" />-->
    </div>
   @if(request()->segment(2) != 'edit-category')
<div class="input-field col s12">
    <label for="cemail0">OG Scripts</label>
    <textarea rows="50" style="height: 15rem;" name="og_tag_script"><?php
    if(request()->segment(2) == 'edit-product'){
       echo !empty($record[0]->og_tag_script) ? $record[0]->og_tag_script : '';
    }
    else{
        echo !empty($record['og_tag_script']) ? $record['og_tag_script'] : '';
    }
         ?></textarea>
</div>
    @endif
<div class="divider mb-1 mt-1" style="user-select: auto;"></div>