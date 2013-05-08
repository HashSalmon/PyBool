
# parsetab.py
# This file is automatically generated. Do not edit.
_tabversion = '3.2'

_lr_method = 'LALR'

_lr_signature = '\xd1\xad\x15a\x05\xc2\xadAz\xed\x9c\xed\x12\x11\xd8t'
    
_lr_action_items = {'ASSIGNOP':([4,],[8,]),'EQOP':([11,12,13,16,17,18,25,26,27,28,29,30,],[-12,-13,22,22,-6,22,-5,-8,-10,-7,22,-9,]),'CONST':([6,8,9,10,19,20,21,22,23,],[12,12,12,12,12,12,12,12,12,]),'MAINEXP':([0,],[1,]),'VARORDER':([0,],[2,]),'IMPLIESOP':([11,12,13,16,17,18,25,26,27,28,29,30,],[-12,-13,20,20,-6,20,-5,-8,20,-7,20,-9,]),'OROP':([11,12,13,16,17,18,25,26,27,28,29,30,],[-12,-13,19,19,-6,19,-5,-8,19,-7,19,19,]),'NOTOP':([6,8,9,10,19,20,21,22,23,],[9,9,9,9,9,9,9,9,9,]),'COLON':([1,2,],[6,7,]),'LPAREN':([6,8,9,10,19,20,21,22,23,],[10,10,10,10,10,10,10,10,10,]),'VARIABLE':([0,6,7,8,9,10,14,15,19,20,21,22,23,24,],[4,11,14,11,11,11,-16,24,11,11,11,11,11,-15,]),'RPAREN':([11,12,17,18,25,26,27,28,29,30,],[-12,-13,-6,25,-5,-8,-10,-7,-11,-9,]),'XOROP':([11,12,13,16,17,18,25,26,27,28,29,30,],[-12,-13,23,23,-6,23,-5,-8,23,-7,23,-9,]),'ANDOP':([11,12,13,16,17,18,25,26,27,28,29,30,],[-12,-13,21,21,-6,21,-5,21,21,-7,21,21,]),'$end':([0,3,5,11,12,13,14,15,16,17,24,25,26,27,28,29,30,],[-14,0,-4,-12,-13,-3,-16,-1,-2,-6,-15,-5,-8,-10,-7,-11,-9,]),}

_lr_action = { }
for _k, _v in _lr_action_items.items():
   for _x,_y in zip(_v[0],_v[1]):
      if not _x in _lr_action:  _lr_action[_x] = { }
      _lr_action[_x][_k] = _y
del _lr_action_items

_lr_goto_items = {'start':([0,],[3,]),'variableList':([7,],[15,]),'expression':([6,8,9,10,19,20,21,22,23,],[13,16,17,18,26,27,28,29,30,]),'empty':([0,],[5,]),}

_lr_goto = { }
for _k, _v in _lr_goto_items.items():
   for _x,_y in zip(_v[0],_v[1]):
       if not _x in _lr_goto: _lr_goto[_x] = { }
       _lr_goto[_x][_k] = _y
del _lr_goto_items
_lr_productions = [
  ("S' -> start","S'",1,None,None,None),
  ('start -> VARORDER COLON variableList','start',3,'p_start','../../../../PyBool/include/PyBool_std_parse.py',87),
  ('start -> VARIABLE ASSIGNOP expression','start',3,'p_start','../../../../PyBool/include/PyBool_std_parse.py',88),
  ('start -> MAINEXP COLON expression','start',3,'p_start','../../../../PyBool/include/PyBool_std_parse.py',89),
  ('start -> empty','start',1,'p_start','../../../../PyBool/include/PyBool_std_parse.py',90),
  ('expression -> LPAREN expression RPAREN','expression',3,'p_expression_paren','../../../../PyBool/include/PyBool_std_parse.py',109),
  ('expression -> NOTOP expression','expression',2,'p_expression_not','../../../../PyBool/include/PyBool_std_parse.py',113),
  ('expression -> expression ANDOP expression','expression',3,'p_expression_and','../../../../PyBool/include/PyBool_std_parse.py',117),
  ('expression -> expression OROP expression','expression',3,'p_expression_or','../../../../PyBool/include/PyBool_std_parse.py',121),
  ('expression -> expression XOROP expression','expression',3,'p_expression_xor','../../../../PyBool/include/PyBool_std_parse.py',125),
  ('expression -> expression IMPLIESOP expression','expression',3,'p_expression_impl','../../../../PyBool/include/PyBool_std_parse.py',129),
  ('expression -> expression EQOP expression','expression',3,'p_expression_eqv','../../../../PyBool/include/PyBool_std_parse.py',133),
  ('expression -> VARIABLE','expression',1,'p_expression_var','../../../../PyBool/include/PyBool_std_parse.py',138),
  ('expression -> CONST','expression',1,'p_expression_const','../../../../PyBool/include/PyBool_std_parse.py',154),
  ('empty -> <empty>','empty',0,'p_empty','../../../../PyBool/include/PyBool_std_parse.py',162),
  ('variableList -> variableList VARIABLE','variableList',2,'p_variableList','../../../../PyBool/include/PyBool_std_parse.py',168),
  ('variableList -> VARIABLE','variableList',1,'p_variableList','../../../../PyBool/include/PyBool_std_parse.py',169),
]