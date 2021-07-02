#include "mainwindow.h"
#include "ui_mainwindow.h"
#include "dibujar.h"
#include<vector>
#include<QMessageBox>

MainWindow::MainWindow(QWidget *parent)
    : QMainWindow(parent)
    , ui(new Ui::MainWindow)
{
    ui->setupUi(this);
    connect(ui->Create,SIGNAL(clicked(bool)),this,SLOT(on_btnCreat_clicked()));
    connect(ui->clear,SIGNAL(clicked(bool)),this,SLOT(on_clear_clicked()));

}

MainWindow::~MainWindow()
{
    delete ui;
}

void MainWindow::on_btnCreat_clicked()
{
    QString input1 = ui->lEdInput1->text();
    QString input2 = ui->lEdInput2->text();
    Dibujar *p = new Dibujar();
    p->setInput(input1,input2);
    p->show();
}
void MainWindow::on_clear_clicked()
{
    ui->lEdInput2->clear();
    ui->lEdInput1->clear();
}
