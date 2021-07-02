#ifndef ARBOLBI_H
#define ARBOLBI_H
#include<algorithm>
#include<cstdio>
#include<string>
#include<string>
#include<vector>
#include<vector>
using namespace std;
struct BinTreeNode
{
    char data;
    BinTreeNode*leftChild, *rightChild;
    BinTreeNode() { leftChild = NULL; rightChild = NULL; }
    BinTreeNode(char x, BinTreeNode*l = NULL, BinTreeNode *r = NULL)
    {
        data = x;
        leftChild = l;
        rightChild = r;
    }
};

class ArbolBi
{
private:
    BinTreeNode * root;
public:
    ArbolBi();
    BinTreeNode* Rebuild(vector<char>pre, vector<char>mid);
        void set(vector<char>pre, vector<char>mid)
        {
            root = this->Rebuild(pre, mid);
        }
        BinTreeNode*getRoot(){return root;}
        int getHeight(){int num=this->getHeight(root);return num;}
        int getHeight(BinTreeNode*subTree)
        {
            if (subTree == NULL)return 0;
                int i = getHeight(subTree->leftChild);
                int j = getHeight(subTree->rightChild);
                return (i < j) ? j + 1 : i + 1;
        }

};

#endif // ARBOLBI_H
