@twillBlockTitle('paragraph')
@twillBlockIcon('text')

@formField('wysiwyg', [
    'name' => 'paragraph',
    'type' => 'textarea',
    'label' => 'paragraph',
    'toolbarOptions' => [
      ['header' => [2, 3, 4, 5, 6, false]],
      'bold',
      'italic',
      'underline',
      'strike',
      ["script" => "super"],
      ["script" => "sub"],
      "blockquote",
      "code-block",
      ['list' => 'ordered'],
      ['list' => 'bullet'],
      ['indent' => '-1'],
      ['indent' => '+1'],
      ["align" => []],
      ["direction" => "rtl"],
      'link',
      "clean",
],
    'maxlength' => 250,
    'rows' => 4
])