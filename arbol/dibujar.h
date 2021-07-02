#ifndef DIBUJAR_H
#define DIBUJAR_H
#include "arbolbi.h"
#include <QWidget>
class Dibujar:public QWidget
{
    Q_OBJECT

public:
    explicit Dibujar(QWidget *parent = 0);
    bool setInput(QString input1, QString input2);
protected:
    void paintEvent(QPaintEvent *);
     void draw(BinTreeNode *node, int x, int y, int angle, bool isLeft, int depth, QPainter *p);
   BinTreeNode* test();
private:
    ArbolBi* myTree;
    const int rootLengt=160;
    const double PI=3.1415926;

};

#endif // DIBUJAR_H
