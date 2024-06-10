package jforex.plugin.strategies;

import com.dukascopy.api.*;

public class SimpleStrategy implements IStrategy {
    
    @Override
    public void onStart(IContext context) throws JFException {
        System.out.println("Estrategia iniciada.");
    }

    @Override
    public void onStop() throws JFException {
        System.out.println("Estrategia detenida.");
    }

    @Override
    public void onTick(Instrument instrument, ITick tick) throws JFException {
        // Lógica de la estrategia cuando ocurre un tick
        double bid = tick.getBid();
        double ask = tick.getAsk();
        
        System.out.println("Instrumento: " + instrument.toString() + ", Precio de compra: " + bid + ", Precio de venta: " + ask);
    }

    @Override
    public void onBar(Instrument instrument, Period period, IBar askBar, IBar bidBar) throws JFException {
        // TODO Auto-generated method stub
        throw new UnsupportedOperationException("Unimplemented method 'onBar'");
    }

    @Override
    public void onMessage(IMessage message) throws JFException {
        // TODO Auto-generated method stub
        throw new UnsupportedOperationException("Unimplemented method 'onMessage'");
    }

    @Override
    public void onAccount(IAccount account) throws JFException {
        // TODO Auto-generated method stub
        throw new UnsupportedOperationException("Unimplemented method 'onAccount'");
    }

    // Método main para ejecutar la estrategia de forma independiente
    public static void main(String[] args) {
        SimpleStrategy strategy = new SimpleStrategy();
        strategy.startStrategy();
    }

    // Método para iniciar la estrategia
    public void startStrategy() {
        // Inicia la estrategia aquí
        System.out.println("Iniciando la estrategia...");
    }
}
