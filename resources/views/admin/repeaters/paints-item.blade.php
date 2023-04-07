@twillRepeaterTitle('Quy cách và màu sơn')
@twillRepeaterTrigger('Thêm')
@twillRepeaterGroup('app')

@formField('input', [
    'name' => 'specifications',
    'label' => 'Quy cách',
    'maxlength' => 200,
    'required' => true,
    'note' => 'Ví dụ: 4kg'
])

@formField('input', [
    'name' => 'color',
    'label' => 'Màu sơn',
    'required' => true,
])

@formField('input', [
    'name' => 'origin_price',
    'label' => 'Giá gốc',
    'required' => true,
    'type' => 'number',
    'note' => 'Ví dụ: 1600000'
])

@formField('input', [
    'name' => 'sell_price',
    'label' => 'Giá bán ra',
    'required' => true,
    'type' => 'number',
    'note' => 'Ví dụ: 1600000'
])
