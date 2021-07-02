#ifndef MAINWINDOW_H
#define MAINWINDOW_H

#include <QWidget>

#include <QMainWindow>

QT_BEGIN_NAMESPACE
namespace Ui { class MainWindow; }
QT_END_NAMESPACE

class MainWindow : public QMainWindow
{
    Q_OBJECT

public:
    MainWindow(QWidget *parent = 0);
    ~MainWindow();
public slots:
   void on_btnCreat_clicked();
   void on_clear_clicked();
private:
    Ui::MainWindow *ui;
};
#endif // MAINWINDOW_H
