<?php
  // Sync with test/test_mode_constant.js file
  const QUESTION_TOPIC_BITMASK = "Bitmask";
  const QUESTION_TOPIC_BST = "BST";
  const QUESTION_TOPIC_HEAP = "Heap";
  const QUESTION_TOPIC_UFDS = "UFDS";
  const QUESTION_TOPIC_MST = "MST";
  const QUESTION_TOPIC_SSSP = "SSSP";
  const QUESTION_TOPIC_GRAPH_TRAVERSAL = "GraphTraversal";

  // General in several data-structures
  const QUESTION_TYPE_DELETION = "Deletion";
  const QUESTION_TYPE_INSERTION = "Insertion";
  const QUESTION_TYPE_MIN_VALUE = "MinVal";
  const QUESTION_TYPE_MAX_VALUE = "MaxVal";
  const QUESTION_TYPE_K_SMALLEST_VALUE = "KSmallestVal";
  const QUESTION_TYPE_INTERNAL = "Internal";
  const QUESTION_TYPE_LEAVES = "Leaves";
  const QUESTION_TYPE_ROOT = "Root";
  const QUESTION_TYPE_GREATER_LESS = "greaterLess"; //heap and SSSP
  const QUESTION_TYPE_TRAVERSAL = "Traversal"; //BST and GraphTraversal

  // BST-Specific
  const QUESTION_TYPE_AVL_ROTATION_INSERT = "avlRotationInsert";
  const QUESTION_TYPE_AVL_ROTATION_DELETE = "avlRotationDelete";
  const QUESTION_TYPE_AVL_HEIGHT = "avlHeight";
  const QUESTION_TYPE_HEIGHT = "Height";
  const QUESTION_TYPE_IS_AVL = "isAvl";
  const QUESTION_TYPE_PREDECESSOR = "Predecessor";
  const QUESTION_TYPE_SEARCH = "Search";
  const QUESTION_TYPE_SUCCESSOR = "Successor";
  const QUESTION_TYPE_SWAP = "Swap";

  // Heap-Specific
  const QUESTION_TYPE_EXTRACT = "extract";
  const QUESTION_TYPE_HEAPIFY = "heapify";
  const QUESTION_TYPE_HEAP_SORT = "heapSort";
  const QUESTION_TYPE_RELATIONS = "relations";
  const QUESTION_TYPE_IS_HEAP = "isHeap";
  
  //Bitmask-Specific
  const QUESTION_TYPE_OPERATION = "operation";
  const QUESTION_TYPE_CONVERT = "convert";
  const QUESTION_TYPE_NUMBER_ON = "numberOn";
  const QUESTION_TYPE_LSONE = "LSOne";

  // UFDS-Specific
  const QUESTION_TYPE_FIND_SET_SEQUENCE = "findSetSeq";
  const QUESTION_TYPE_FIND_SET_COMPRESSION = "findSetCompress";
  const QUESTION_TYPE_IS_SAME_SET = "isSameSet";
  
  //Graph Traversal-Specific
  const QUESTION_TYPE_DISCONNECT = "disconnect";

  // MST-Specific
  const QUESTION_TYPE_PRIM_SEQUENCE = "prim";
  const QUESTION_TYPE_KRUSKAL_SEQUENCE = "kruskal";
  const QUESTION_TYPE_MINIMAX_EDGE = "minimax";
  
  // SSSP-Specific
  const QUESTION_TYPE_PATH = "path";
  const QUESTION_TYPE_PATH_WEIGHT = "pathWeight";

  // General
  const QUESTION_SUB_TYPE_NONE = "";
  const QUESTION_SUB_TYPE_INSERTION = "insert";
  const QUESTION_SUB_TYPE_DELETION = "delete";

  // BST-Specific
  const QUESTION_SUB_TYPE_INORDER_TRAVERSAL = "inorder";
  const QUESTION_SUB_TYPE_POSTORDER_TRAVERSAL = "postorder";
  const QUESTION_SUB_TYPE_PREORDER_TRAVERSAL = "preorder";

  // Heap-Specific
  const QUESTION_SUB_TYPE_MAX_HEAP = "max";
  const QUESTION_SUB_TYPE_MIN_HEAP = "min";
  
  // Bitmask-Specific
  const QUESTION_SUB_TYPE_AND = "AND";
  const QUESTION_SUB_TYPE_OR = "OR";
  const QUESTION_SUB_TYPE_XOR = "XOR";
  const QUESTION_SUB_TYPE_BINARY = "binary";
  const QUESTION_SUB_TYPE_DECIMAL = "integer";
  
  // Graph Traversal-Specific
  const QUESTION_SUB_TYPE_DFS = "DFS";
  const QUESTION_SUB_TYPE_BFS = "BFS";

  const ANSWER_TYPE_VERTEX = "vertex";
  const ANSWER_TYPE_VERTEX_MCQ = "vertexMcq";
  const ANSWER_TYPE_EDGE = "edge";
  const ANSWER_TYPE_MCQ = "mcq";
  const ANSWER_TYPE_FILL_BLANKS = "fillBlanks";

  const ANSWER_AMT_ONE = 1;
  const ANSWER_AMT_MULTIPLE = 2;

  const MODE_GENERATE_SEED = 0;			//unused
  const MODE_GENERATE_QUESTIONS = 1;	//generate questions from seed, topics and no. of questions
  const MODE_CHECK_ANSWERS = 2;			//training mode check answers - answers and scores not recorded
  const MODE_LOGIN = 3;					//student login for test mode
  const MODE_TEST_BEGIN = 4;			//test mode - start student timer and retrieve test config
  const MODE_TEST_SUBMIT = 5;			//test mode check answers - answers and scores recorded in database
  const MODE_TEST_GET_ANSWERS = 6;		//
  const MODE_TEST_GET_INFO = 7;		//test mode - return elapsed time for a student
  const MODE_ADMIN = 10;				//admin login for control panel
  const MODE_ADMIN_GET_CONFIG = 11;		//retrieve test config for control panel
  const MODE_ADMIN_EDIT_CONFIG = 12;	//edit test config from control panel
  const MODE_ADMIN_RESET_ATTEMPT = 13;	//reset student test attempt from control panel

  const UNANSWERED = "unanswered";
  const NO_ANSWER = "noAnswer";

  // Sync with graph_library/constant.js file

  const EDGE_TYPE_UDE = 0;
  const EDGE_TYPE_DE = 1;
  const EDGE_TYPE_BDE = 2;

  // Keep inside PHP
  const BST_HEIGHT_LIMIT = 5;

  const BST_IS_AVL_ANS_VALID = 0;
  const BST_IS_AVL_ANS_INVALID = 1;

  const BST_LINKED_LIST_ASCENDING = true;
  const BST_LINKED_LIST_DESCENDING = false;

  const BST_RANGE_LOWER_BOUND = 1;
  const BST_RANGE_UPPER_BOUND = 99;

  const BST_SWAP_ANS_VALID = 0;
  const BST_SWAP_ANS_INVALID = 1;

  const BST_SIZE_LOWER_BOUND = 3;
  const BST_SIZE_LINKED_LIST_UPPER_BOUND = 5;
  const BST_SIZE_UPPER_BOUND = 10;

  const HEAP_RANGE_UPPER_BOUND = 99;
  const HEAP_RANGE_LOWER_BOUND = 1;

  const HEAP_SIZE_UPPER_BOUND = 10;
  const HEAP_SIZE_LOWER_BOUND = 3;
  
  const HEAP_SWAP_ANS_VALID = 0;
  const HEAP_SWAP_ANS_INVALID = 1;

  const GRAPH_TEMPLATE_TYPE_DIRECTED = 0;
  const GRAPH_TEMPLATE_TYPE_UNDIRECTED = 1;

  const GRAPH_TEMPLATE_EMPTY = "empty";
  const GRAPH_TEMPLATE_K5 = "k5";
  const GRAPH_TEMPLATE_TESSELLATION = "tesselation";
  const GRAPH_TEMPLATE_RAIL = "rail";
  const GRAPH_TEMPLATE_CP4P10 = "cp4.10";

  const GRAPH_TEMPLATE_CP3_4_17 = "cp4.17";
  const GRAPH_TEMPLATE_CP3_4_18 = "cp4.18";
  const GRAPH_TEMPLATE_CP3_4_19 = "cp4.19";

  const INFINITY = 1000000000;
?>