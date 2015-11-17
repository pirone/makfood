import junit.framework.Test;
import junit.framework.TestSuite;

public class IncluirFase {

  public static Test suite() {
    TestSuite suite = new TestSuite();
    suite.addTestSuite(Incluir_Empreendimento.class);
    suite.addTestSuite(Incluir_Empreendimento_FE.class);
    suite.addTestSuite(Incluir_PublicoAlvo.class);
    suite.addTestSuite(IncluirAlterar_PublicoAlvo.class);
    suite.addTestSuite(Incluir_Fase.class);
    suite.addTestSuite(Alterar_Fase.class);
    suite.addTestSuite(Configurar_DadosGeraisdaFase.class);
    suite.addTestSuite(Configurar_Dados_Gerais_da_Fase.class);
    suite.addTestSuite(Incluir_Caracteristica_Geral.class);
    suite.addTestSuite(Alterar_Caracteristica_Geral.class);
    suite.addTestSuite(Incluir_Campanha.class);
    suite.addTestSuite(Realiza_Inscricao_Campanha_FE.class);
    suite.addTestSuite(Realiza_Incricao_Campanha.class);
    return suite;
  }

  public static void main(String[] args) {
    junit.textui.TestRunner.run(suite());
  }
}
