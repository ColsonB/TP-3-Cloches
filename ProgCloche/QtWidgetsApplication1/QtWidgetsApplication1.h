#pragma once

#include <QtWidgets/QMainWindow>
#include <QApplication>
#include "ui_QtWidgetsApplication1.h"

#include <QDebug>
#include <QRegExp>
#include <QMainWindow>
#include <QFileDialog>
#include <qtcpsocket.h>
#include <qgroupbox.h>
#include <QVBoxLayout>
#include <QLabel>
#include <qbuffer.h>

class QtWidgetsApplication1 : public QMainWindow
{
    Q_OBJECT

public:
    QtWidgetsApplication1(QWidget *parent = Q_NULLPTR);
	QTcpSocket * socket;

private:
    Ui::QtWidgetsApplication1Class ui;

public slots:
	void onSocketConnected();
	void onSocketDisconnected();
	void cloche();
	void cloche2();
	void cloche3();
	void cloche4();
};
