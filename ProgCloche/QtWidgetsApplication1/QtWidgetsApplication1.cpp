#include "QtWidgetsApplication1.h"
#include <QApplication>
#include <QKeyEvent>

QtWidgetsApplication1::QtWidgetsApplication1(QWidget *parent)
    : QMainWindow(parent)
{
	socket = new QTcpSocket(this);

	QObject::connect(socket, SIGNAL(connected()), this, SLOT(onSocketConnected()));
	QObject::connect(socket, SIGNAL(disconnected()), this, SLOT(onSocketDisconnected()));
	QObject::connect(socket, SIGNAL(readyRead()), this, SLOT(onSocketReadyRead()));

	// 192.168.65.103
	socket->connectToHost("192.168.64.124", 502);

    ui.setupUi(this);
}

void QtWidgetsApplication1::onSocketConnected() {

	ui.label->setText("Connecter");

};

void QtWidgetsApplication1::onSocketDisconnected() {

};


void QtWidgetsApplication1::cloche() {
	char trame[12];
	trame[0] = 0x00;
	trame[1] = 0x01;
	trame[2] = 0x00;
	trame[3] = 0x00;
	trame[4] = 0x00;
	trame[5] = 0x06;
	trame[6] = 0x11;
	trame[7] = 0x06;
	trame[8] = 0x00;
	trame[9] = 0x02;
	trame[10] = 0x00;
	trame[11] = 0x01;

	QByteArray data(trame, 12);
	socket->write(data);

	char trame2[12];
	trame2[0] = 0x00;
	trame2[1] = 0x01;
	trame2[2] = 0x00;
	trame2[3] = 0x00;
	trame2[4] = 0x00;
	trame2[5] = 0x06;
	trame2[6] = 0x11;
	trame2[7] = 0x06;
	trame2[8] = 0x00;
	trame2[9] = 0x02;
	trame2[10] = 0x00;
	trame2[11] = 0x00;

	QByteArray data2(trame2, 12);
	socket->write(data2);


}

void QtWidgetsApplication1::cloche2() {
	char trame3[12];
	trame3[0] = 0x00;
	trame3[1] = 0x01;
	trame3[2] = 0x00;
	trame3[3] = 0x00;
	trame3[4] = 0x00;
	trame3[5] = 0x06;
	trame3[6] = 0x11;
	trame3[7] = 0x06;
	trame3[8] = 0x00;
	trame3[9] = 0x02;
	trame3[10] = 0x00;
	trame3[11] = 0x02;

	QByteArray data3(trame3, 12);
	socket->write(data3);

	char trame4[12];
	trame4[0] = 0x00;
	trame4[1] = 0x01;
	trame4[2] = 0x00;
	trame4[3] = 0x00;
	trame4[4] = 0x00;
	trame4[5] = 0x06;
	trame4[6] = 0x11;
	trame4[7] = 0x06;
	trame4[8] = 0x00;
	trame4[9] = 0x02;
	trame4[10] = 0x00;
	trame4[11] = 0x00;

	QByteArray data4(trame4, 12);
	socket->write(data4);


}

void QtWidgetsApplication1::cloche3() {
	char trame5[12];
	trame5[0] = 0x00;
	trame5[1] = 0x01;
	trame5[2] = 0x00;
	trame5[3] = 0x00;
	trame5[4] = 0x00;
	trame5[5] = 0x06;
	trame5[6] = 0x11;
	trame5[7] = 0x06;
	trame5[8] = 0x00;
	trame5[9] = 0x02;
	trame5[10] = 0x00;
	trame5[11] = 0x04;

	QByteArray data5(trame5, 12);
	socket->write(data5);

	char trame6[12];
	trame6[0] = 0x00;
	trame6[1] = 0x01;
	trame6[2] = 0x00;
	trame6[3] = 0x00;
	trame6[4] = 0x00;
	trame6[5] = 0x06;
	trame6[6] = 0x11;
	trame6[7] = 0x06;
	trame6[8] = 0x00;
	trame6[9] = 0x02;
	trame6[10] = 0x00;
	trame6[11] = 0x00;

	QByteArray data6(trame6, 12);
	socket->write(data6);


}

void QtWidgetsApplication1::cloche4() {
	char trame7[12];
	trame7[0] = 0x00;
	trame7[1] = 0x01;
	trame7[2] = 0x00;
	trame7[3] = 0x00;
	trame7[4] = 0x00;
	trame7[5] = 0x06;
	trame7[6] = 0x11;
	trame7[7] = 0x06;
	trame7[8] = 0x00;
	trame7[9] = 0x02;
	trame7[10] = 0x00;
	trame7[11] = 0x08;

	QByteArray data7(trame7, 12);
	socket->write(data7);

	char trame8[12];
	trame8[0] = 0x00;
	trame8[1] = 0x01;
	trame8[2] = 0x00;
	trame8[3] = 0x00;
	trame8[4] = 0x00;
	trame8[5] = 0x06;
	trame8[6] = 0x11;
	trame8[7] = 0x06;
	trame8[8] = 0x00;
	trame8[9] = 0x02;
	trame8[10] = 0x00;
	trame8[11] = 0x00;

	QByteArray data8(trame8, 12);
	socket->write(data8);


}

//0001 0000 0006 11 06 0002 0001