<?php
class Node
{
    public $key;
    public $left    = null;
    public $right   = null;
 
    public function __construct($key) 
    {
        $this->key = $key; 
        $this->left = null;
        $this->right = null;
        
    }
}
 
function lca($root, $node1, $node2) 
{
    // Base Case 
    if ($root == null){
        return null;
    } 
        
  
    // If both node1 and node2 are smaller than root, then LCA 
    // lies in left 
    if($root->key > $node1 && $root->key > $node2){ 
        return lca($root->left, $node1, $node2); 
    }
    // If both node1 and node2 are greater than root, then LCA 
    // lies in right  
    if($root->key < $node1 && $root->key < $node2){
        return lca($root->right, $node1, $node2);
    }
    return $root;
}

// Driver program to test above function 
/**
 *         20
 *       /   \
 *     8      22
 *   /   \
 * 4      12
 *       /  \
 *     10    14
 */
// Let us construct the BST like above tree 
$root = new Node(20);
$root->left = new Node(8);
$root->right = new Node(22);
$root->left->left = new Node(4);
$root->left->right = new Node(12);
$root->left->right->left = new Node(10);
$root->left->right->right = new Node(14);

//Sample Output
$n1 = 10;
$n2 = 14;
$t = lca($root, $n1, $n2);
echo "LCA of " .$n1. " and " .$n2. " is " .$t->key. "<br>";
  
$n1 = 14;
$n2 = 8;
$t = lca($root, $n1, $n2);
echo "LCA of " .$n1. " and " .$n2. " is " .$t->key. "<br>";
  
$n1 = 10;
$n2 = 22;
$t = lca($root, $n1, $n2); 
echo "LCA of " .$n1. " and " .$n2. " is " .$t->key. "<br>";
